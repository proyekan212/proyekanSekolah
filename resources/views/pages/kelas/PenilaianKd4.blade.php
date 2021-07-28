@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Penilaian Keterampilan</li>
  </ol>
</nav>
<div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>
    
              @foreach($kompetensi_dasar as  $data)
              {{$data->nama_kompetensi_dasar}}
              @endforeach

  </p>
</div>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Penilaian keterampilan Kelas di MIPA X-MIPA-1_MIPA Biologi</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Buat Rencana Pembelajaran</button>
          </div>
        </div>
        <div>
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
         @endforeach
        </div>
        <div class="table-responsive">

          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Skema Penilaian</th>
                <th>Nama Penilaian</th>
                <th>Kompetensi Dasar</th>
                <th>Keterangan</th>
                <th>Waktu</th>
                <th>Hasil</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datas as $key => $data)
                <tr>
                  <td>
                    {{$key+1}}
                  </td>
                  <td>{{$data->skema->name}}</td>
                  <td>{{$data->nama_penilaian}}</td>
                  <td>
                  <ul>
                      @foreach($data->kd_keterampilan as $row)
                        <li>- {{$row->kompetensi_dasar->nama_kompetensi_dasar}}</li>  
                      @endforeach
                  </ul>
                  </td>
                  <td>
                    {{$data->keterangan}}
                  </td>
                  <td>
                    <span class="text-blue-600">
                    {{$data->mulai_pengerjaan->format('j-F-Y')}}
                    </span> sampai 
                    <span class="text-blue-600">
                    {{$data->finish_pengerjaan->format('j-F-Y')}}
                    </span>
                  </td>
                  <td>
                    
                    <button data-ref="penilaian" type="button" onclick="fetchDataPenilaian('{{$key}}', '{{$data->id}}')" class="btn btn-outline-success" data-toggle="modal" data-target=".Penilaian{{$key}}">Hasil</button>
                  </td>
          
                  <td class="flex ">
                       <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            <a href="{{ url('kelas/penilaian_keterampilan/edit', $data->id)}}">
                            edit
                            </a>
                          </span>
                        </button>
                
                      <form method="post" action="{{ url('kelas/penilaian_keterampilan', $data->id)}}" onclick="deleteData('{{$data->id}}', this)" >
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="button"  class="text-red-500 hover:text-red-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300">
                          <span class="material-icons"> 
                            delete_forever  
                          </span>
                        </button>
                      </form>
                    </td>
                
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade TambahData" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penialain keterampilan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('kelas/penilaian_keterampilan')}}">
        @csrf
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Mulai Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date" required name="mulai_pengerjaan" class="form-control"  />
            </div>
            <div class="col-lg-2">
              <label class="col-form-label">Finish Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date" required  name="finish_pengerjaan" class="form-control"   />
              
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama Penilaian</label>
            </div>
            <div class="col-lg-8">
             <input type="text" required class="form-control" name="nama_penilaian" placeholder="Nama Penilaian, Contoh: Praktik Present">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Skema</label>
            </div>
            <div class="col-lg-8">
              <select name="skema_penilaian" required class="form-control form-control-sm mb-3">
                  @foreach($skema as $skema) 
                    <option value="{{$skema->id}}">
                      {{$skema->name}}
                    </option>
                  @endforeach
                  
                  
                </select>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kompetensi Dasar (KD) (*)</label>
            </div>
            <div class="col-lg-8">
                @foreach($kompetensi_dasar as $data) 
                    <p class="flex items-center mb-1 md:mb-2">
                      <input type="checkbox" name="kompetensi_dasar[]" value="{{$data->kompetensi_dasar->id}}">
                      <span class=" capitalize pl-2 text-xs lg:text-sm">
                      {{$data->kompetensi_dasar->nama_kompetensi_dasar}}
                      </span>
                    </p>   
                @endforeach
            </div>
          </div>
          <!--  -->
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Keterangan</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control"  name="keterangan" id="simpleMdeExample" rows="10"></textarea>
            </div>
          </div>
          <!-- <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Metode (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Media/Sumber Belajar (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kegiatan Pembelajaran (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="tinymce" id="simpleMdeExample" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Penilaian (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="tinymce" id="simpleMdeExample" rows="10"></textarea>
            </div>
          </div> -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

  @foreach($datas as $key => $data)
<div class="modal fade Penilaian{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penialain keterampilan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="table-responsive">

          <table id="table-nilai" style="table-layout:auto; width:700px;" id="dataTableExample" class="table  table-bordered">
            <thead>
              <tr>
                <th rowspan="2" width="10%">No</th>
                <th rowspan="2">Nisn</th>
                <th rowspan="2">Nama</th>
                <th rowspan="2">Gender</th>
                <th rowspan="1" style="min-width:150px;" class="text-center" colspan="1">Skor</th>
                <th rowspan="2">
                 status
                </th>
                <th rowspan="2" style="min-width:150px;">feedback</th>
                <th rowspan="2"> file Tugas</th>
              </tr>
              <tr>
                
                <th>
                  Nilai
                </th>
               
              
              </tr>
            </thead>
            <tbody>
            @foreach($daftar_kelas as $index => $siswa)
                    <tr>
                      <td>
                        {{$index + 1}}
                      </td>
                      <td>
                        {{$siswa->user_detail->nisn_or_nip}}
                      </td>
                      <td>
                        {{$siswa->user_detail->name}}
                      </td>
                      <td>
                        {{$siswa->user_detail->jenis_kelamin}}
                      </td>

                      @if($data->nilai->count() > 0)
                        @if($data->nilai_siswa($siswa->user_id))

                          <!-- <td width="">
                            
                            <input  type="number" value="{{$data->nilai_siswa($siswa->user_id)->materi}}" min="0" onchange="UpdateMateri(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>
                          <td>
                            
                            <input type="number" value="{{$data->nilai_siswa($siswa->user_id)->jumlah_skor}}" min="0" onchange="UpdateJumlahSkor(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>

                         
                            <td>
                            
                            <input type="number" value="{{$data->nilai_siswa($siswa->user_id)->tugas}}" min="0" onchange="UpdateTugas(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td> -->

                          <td class="text-center">
                            
                            <input type="number" value="{{$data->nilai_siswa($siswa->user_id)->nilai}}" min="0" onchange="UpdateNilai(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>

                          <td>
                              status                          
                          </td>
                          
                            <td class=" ">
                            <textarea name="" onchange="UpdateFeedback(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control" id="" rows="3">
                              {{$data->nilai_siswa($siswa->user_id)->feedback}}
                            </textarea>
                          </td>
                        @else
                        <!-- <td width="">
                            
                            <input  type="number" value="0" min="0" onchange="UpdateMateri(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>
                          <td>
                            
                            <input type="number" value="0" min="0" onchange="UpdateJumlahSkor(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>

                          

                            <td>
                            
                            <input type="number" value="0" min="0" onchange="UpdateTugas(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td> -->
                          <td class="text-center">
                            
                            <input type="number" value="0" min="0" onchange="UpdateNilai(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>
                          <td>
                              status                          
                          </td>

                            <td class=" ">
                            <textarea name="" onchange="UpdateFeedback(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control" id="" rows="3"></textarea>
                          </td>
              
                            
                        @endif
                      @else

                      <!-- <td width="">
                            
                            <input  type="number" value="0" min="0" onchange="UpdateMateri(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>
                          <td>
                            
                            <input type="number" value="0" min="0" onchange="UpdateJumlahSkor(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>

                          

                            <td>
                            
                            <input type="number" value="0" min="0" onchange="UpdateTugas(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td> -->
                          <td class="text-center">
                            
                            <input type="number" value="0" min="0" onchange="UpdateNilai(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>
                          <td>
                              status                          
                          </td>
                          
                        
                        <td>
                          <textarea name="" onchange="UpdateFeedback(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control" id="" rows="3"></textarea>
                        </td>
     
                      
                      
                      @endif
                      <td>
                      @if($data->tugas_keterampilan->count() > 0)
                        @if($data->tugas_siswa($siswa->user_detail->id))
                          
                          <a href="{{ url('/tugas/keterampilan/'.$data->tugas_siswa($siswa->user_detail->id)->filename_path)}}" class="text-green-400 flex items-center text-sm">
                            <span class="capitalize"> 
                                lihat tugas
                            </span>
                            <span class="pl-2 material-icons">
                              visibility
                            </span>
                          </a>
                          <p class="text-gray-400 text-xs mt2">
                          {{$data->tugas_siswa($siswa->user_detail->id)->created_at->format('j-F-Y')}}
                          </p>
                         
                        
                        @else
                        
                          <span class="rounded-full text-white bg-red-400 px-6 py-2 text-sm capitalize">
                            Belum mengumpulkan
                          </span>
                        
                        @endif
                      @else
                        
                          <span class="rounded-full text-white bg-red-400  px-6 py-2 text-sm capitalize">
                            Belum mengumpulkan
                          </span>
                        
                      @endif
                      </td>
                    </tr>
                   @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
</div>
   @endforeach
<script>

$(document).ready(function() {

  $('#table-nilai').DataTable();
})

function UpdateNilai(event,user_id=null, keterampilan_id) {

  const data = {};

  data['nilai'] = event.value;
  data['user_detail_id'] = user_id;
  data['penilaian_keterampilan_id'] = keterampilan_id;
  axios.post("/penilaian_siswa_keterampilan", data).then((res) => {
    console.log(res);
    })
    .catch((err) => {
      console.log(err.response);
    });  


 
  
}
function UpdateMateri(event, user_id=null, keterampilan_id) {
  const data = {
    'materi' : event.value,
    'user_detail_id': user_id,
    'penilaian_keterampilan_id' : keterampilan_id
  }

  axios.post('/penilaian_siswa_keterampilan', data)
  .then((res) => {
    console.log(res);
  })
  .catch((err) => {
    console.log(err.response);
  })
}

function UpdateJumlahSkor(event, user_id=null, keterampilan_id) {
  const data = {
    'jumlah_skor' : event.value,
    'user_detail_id': user_id,
    'penilaian_keterampilan_id' : keterampilan_id
  }
  axios.post('/penilaian_siswa_keterampilan', data)
  .then((res) => {
    console.log(res);
  })
  .catch((err) => {
    console.log(err.response);
  })

}

function UpdateTugas(event, user_id=null, keterampilan_id){
  const data = {
    'tugas' : event.value,
    'user_detail_id': user_id,
    'penilaian_keterampilan_id' : keterampilan_id
  }

  axios.post('/penilaian_siswa_keterampilan', data)
  .then((res) => {
    console.log(res);
  })
  .catch((err) => {
    console.log(err.response);
  })

}


function UpdateRemedial(event,user_id=null, keterampilan_id) {

  const data = {};

  data['remidi'] = event.value;
  data['user_detail_id'] = user_id;
  data['penilaian_keterampilan_id'] = keterampilan_id;
  axios.post("/penilaian_siswa_keterampilan", data).then((res) => {
    console.log(res);
    })
    .catch((err) => {
      console.log(err.response);
    });  
}

function UpdateFeedback(event,user_id=null, keterampilan_id) {

  const data = {};

  data['feedback'] = event.value;
  data['user_detail_id'] = user_id;
  data['penilaian_keterampilan_id'] = keterampilan_id;
  axios.post("/penilaian_siswa_keterampilan", data).then((res) => {
    console.log(res);
    })
    .catch((err) => {
      console.log(err.response);
    });  
}


function fetchDataPenilaian(index){

  const dataList = document.querySelectorAll('[data-ref="penilaian"]');
  const penilaian = document.getElementById('penilaian');
  penilaian.item = "asw"
} 
function deleteData(id, event) {
    Swal.fire({
      title: 'Apakah yakin menghapus data ini ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if(result.value) {
          event.submit();
        }
        
    })
  }


</script>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/simplemde/simplemde.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/ace-builds/ace.js') }}"></script>
  <script src="{{ asset('assets/plugins/ace-builds/theme-chaos.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/tinymce.js') }}"></script>
  <script src="{{ asset('assets/js/simplemde.js') }}"></script>
  <script src="{{ asset('assets/js/ace.js') }}"></script>
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush
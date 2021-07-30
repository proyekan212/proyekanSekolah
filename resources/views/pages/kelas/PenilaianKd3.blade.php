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
    <li class="breadcrumb-item active" aria-current="page">Penilaian Pengetahuan </li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Penilaian Pengetahuan Kelas di MIPA X-MIPA-1_MIPA Biologi</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Buat Rencana Pembelajaran</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Pertemuan</th>
                <th>Kompetensi Dasar</th>
                <th>Skema</th>
                <th>Keterangan</th>
                <th>Waktu</th>
                <th>Hasil</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

<tr>
@foreach($datas as $key => $data)     
            <td>
                    {{$key+1}}
                  </td>
            <td>{{$data->pertemuan}}</td>
            <td><b>{{$data->kompetensi_dasar->kompetensi_inti->kode}}.{{$data->kompetensi_dasar->id}}</b> {{$data->kompetensi_dasar->nama_kompetensi_dasar}}</td>
            <td>{{$data->skema->name}}</td>
            <td>{{$data->instruksi}}</td>
            <td>{{$data->mulai_pengerjaan}} - {{$data->finish_pengerjaan}}</td>
            <td>
                <button data-ref="penilaian" type="button" onclick="fetchDataPenilaian('{{$key}}', '{{$data->id}}')" class="btn btn-outline-success" data-toggle="modal" data-target=".Penilaian{{$key}}">Hasil</button>
            </td>
           
           
                  <td class="flex ">
                       <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            <a href="{{ url('kelas/penilaian_pengetahuan/edit', $data->id)}}">
                            edit
                            </a>
                          </span>
                        </button>
                
                      <form method="post" action="{{ url('kelas/penilaian_pengetahuan', $data->id)}}" onclick="deleteData('{{$data->id}}', this)" >
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
        <h5 class="modal-title" id="exampleModalLabel">Tugas Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('kelas/penilaian_pengetahuan')}}">
        @csrf
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Mulai Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date" name="mulai_pengerjaan" class="form-control"  />
            </div>
            <div class="col-lg-2">
              <label class="col-form-label">Finish Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date"  name="finish_pengerjaan" class="form-control"   />
              
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Pertemuan Ke (*)</label>
            </div>
            <div class="col-lg-8">
              <select name="pertemuan" class="form-control form-control-sm mb-3">
                  <option selected>- Pilih Pertemuan -</option>
                  <?php
                    for ($x = 1; $x <= $kelas_mapel->pertemuan; $x++) { 
                      echo "<option value='pertermuan $x'> pertemuan $x</option> ";
                    }
                  ?>
                </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Skema</label>
            </div>
            <div class="col-lg-8">
              <select name="skema_penilaian" class="form-control form-control-sm mb-3">
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
              <label class="col-form-label">Penilaian Harian</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" type="number" maxlength="10" name="penilaian_harian" id="defaultconfig-3" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kompetensi Dasar (KD) (*)</label>
            </div>
            <div class="col-lg-8">
              <select name="kompetensi_dasar_id" class="form-control form-control-sm mb-3">
         
                    @foreach($kompetensi_dasar as $index => $row) 
                    <option value="{{$row->kompetensi_dasar_id}}">
                      {{$row->kompetensi_dasar->nama_kompetensi_dasar}}
                    </option>
                    @endforeach
              </select>
            </div>
          </div>
          <!--  -->
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Keterangan</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="instruksi" id="simpleMdeExample" rows="10"></textarea>
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
        <h5 class="modal-title" id="exampleModalLabel">Penialain Pengetahuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="table-responsive">

          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Nilai</th>
                <th>Status</th>
                
                <th>Remedial</th>
                <th>
                  Feedback
                </th>
                <th>Tugas</th>
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

                          <td>
                            
                            <input type="number" value="{{$data->nilai_siswa($siswa->user_id)->nilai}}" min="0" onchange="UpdateNilai(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                          </td>
                            <td>
                            status
                          </td>
                          <td>
                            <input onchange="UpdateRemedial(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" type="number" value="$data->nilai_siswa($siswa->user_id)->remidi" min="0" class="form-control">
                          
                          </td>
                          
                            <td class=" ">
                            <textarea name="" onchange="UpdateFeedback(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control" id="" rows="3">
                              {{$data->nilai_siswa($siswa->user_id)->feedback}}
                            </textarea>
                          </td>
                        @else
                        <td>
                                   
                                   <input type="number" value="0" min="0" onchange="UpdateNilai(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                                 </td>
                                   <td>
                                   status
                                 </td>
                                 <td>
                                   <input onchange="UpdateRemedial(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" type="number" value="0" min="0" class="form-control">
                                 
                                 </td>
                                 
                                   <td class=" ">
                                   <textarea name="" onchange="UpdateFeedback(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control" id="" rows="3"></textarea>
                                 </td>
              
                             </tr>
                        @endif
                      @else

                        <td>
                                   
                          <input type="number" value="0" min="0" onchange="UpdateNilai(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control">
                        </td>
                          <td>
                          status
                        </td>
                        <td>
                          <input onchange="UpdateRemedial(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" type="number" value="0" min="0" class="form-control">
                        
                        </td>
                        
                          <td class=" ">
                          <textarea name="" onchange="UpdateFeedback(this,'{{$siswa->user_detail->id}}', '{{$data->id}}')" class="form-control" id="" rows="3"></textarea>
                        </td>
     
                      

                      @endif

                      @if($data->tugas_pengetahuan->count() > 0)
                        
                        @if($data->tugas_siswa($siswa->user_detail->id))
                         <td>
                            
                          <a class="flex text-green-400 items-center" href="{{ url('/tugas/pengetahuan/'.$data->tugas_siswa($siswa->user_detail->id)->filename_path)}}" class="text-blue-400 text-sm">
                              <span class="capitalize">
                              lihat tugas
                              </span>
                              
                              <span class="pl-2 material-icons">
                                visibility
                              </span>
                          </a>
                         </td>
                        @else
                        <td>
                          <span class="rounded-full text-white bg-red-400 px-6 py-2 text-sm capitalize">
                            Belum mengumpulkan
                          </span>
                        </td>
                        @endif
                      @else
                        <td>
                          <span class="rounded-full text-white bg-red-400  px-6 py-2 text-sm capitalize">
                            Belum mengumpulkan
                          </span>
                        </td>
                      @endif
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

function UpdateNilai(event,user_id=null, pengetahuan_id) {

  const data = {};

  data['nilai'] = event.value;
  data['user_detail_id'] = user_id;
  data['penilaian_pengetahuan_id'] = pengetahuan_id;
  axios.post("/penilaian_siswa_pengetahuan", data).then((res) => {
    console.log(res);
    })
    .catch((err) => {
      console.log(err.response);
    });  


 
  
}

function UpdateRemedial(event,user_id=null, pengetahuan_id) {

  const data = {};

  data['remidi'] = event.value;
  data['user_detail_id'] = user_id;
  data['penilaian_pengetahuan_id'] = pengetahuan_id;
  axios.post("/penilaian_siswa_pengetahuan", data).then((res) => {
    console.log(res);
    })
    .catch((err) => {
      console.log(err.response);
    });  
}

function UpdateFeedback(event,user_id=null, pengetahuan_id) {

  const data = {};

  data['feedback'] = event.value;
  data['user_detail_id'] = user_id;
  data['penilaian_pengetahuan_id'] = pengetahuan_id;
  axios.post("/penilaian_siswa_pengetahuan", data).then((res) => {
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
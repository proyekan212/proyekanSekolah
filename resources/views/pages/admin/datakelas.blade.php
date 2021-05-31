@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active capitalize" aria-current="page" >Data Kelas Ajar</li>
  </ol>
</nav>

<!-- <div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>Jurnal oleh guru mata pelajaran dibuat untuk seluruh peserta didik yang mengikuti mata pelajarannya, setiap kejadian terhadap siswa di dalam kelas mata pelajaran yang Anda ampu dapat dicatat dalam jurnal guru agar dapat dimonitor Wali Kelas dan Guru BK</p>
</div> -->

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Data</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Kelas Ajar</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Tahun Ajaran</th>
                <th>Rombel</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($datas as $index => $row)

                    <tr>
                        <td>
                            {{$index + 1 }}
                        </td>
                        <td>
                            {{$row->master_kelas->kode_kelas->kode}} {{$row->master_kelas->kelas}}
                        </td>
                        <td>
                          {{$row->tahun_akademik->tahun_akademik}}
                        </td>
                        <td>
                          {{$row->rombel->name}}
                        </td>
                        <td class="flex items-center ">
                        <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            <a href="{{ url('data_kelas/edit', $row->id)}}">
                            edit
                            </a>
                          </span>
                        </button>
                      <form method="post" action="{{ url('data_kelas', $row->id)}}" onclick="deleteData('{{$row->id}}', this)" >
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="button"  class="text-red-500 hover:text-red-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300">
                          <span class="material-icons"> 
                            delete_forever  
                          </span>
                        </button>
                      </form>
                      <button data-toggle="modal" data-target="#list-siswa{{$row->id}}" class="mx-2 bg-blue-500 text-white px-4 py-2 rounded-xl outline-none">
                          {{$row->daftar_kelas->count()}} Siswa
                      </button>
                      <button data-toggle="modal" onclick="setKelas('{{$row->id}}', '{{$row->master_kelas->kode_kelas->numerik}}')" data-kelas_id="{{$row->id}}" data-kelas_numerik="{{$row->master_kelas->kode_kelas->numerik}}" data-target="#tambah-siswa" class="mx-2 bg-green-500 text-white px-4 py-2 rounded-xl outline-none">
                          Tambah Siswa
                      </button>
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

<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize" id="exampleModalLabel">sinkronkan siswa ke dalam kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ URL ('data_kelas')}}" method="post">
          @csrf
        <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">Kelas</label>
              </div>
              <div class="col-lg-8">
              <select name="kelas" id="">
              @foreach($master_kelas as $row)
                    <option value="{{$row->id}}">
                      {{$row->kode_kelas->kode}} {{$row->kelas}}
                    </option>
                  @endforeach
              </select>
                 
               </div>
              
            
          </div>

          <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">Tahun Akademik</label>
              </div>
              <div class="col-lg-8">
              
                  <select name="tahun_akademik" id="">
                    @foreach($tahun_akademik as $row)
                      <option value="{{$row->id}}">
                        {{$row->tahun_akademik}}
                      </option>
                    @endforeach
                  </select>
              </div>
              
            
          </div>

         <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">Rombel</label>
              </div>
              <div class="col-lg-8">
                   <select name="rombel" id="">
                    @foreach($rombel as $row)
                      <option value="{{$row->id}}">
                        {{$row->name}}
                      </option>
                    @endforeach
                  </select>
                </div>

          </div>
      </div>

       
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-primary">Tambah
        </button>
      </div>

      </form>
    </div>
  </div>
</div>

@foreach($datas as $index => $row) 
<div class="modal fade" id="list-siswa{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize" id="exampleModalLabel">sinkronkan siswa ke dalam kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action=" {{ url('/data_kelas/store_siswa')}} " method="post">

        <input type="text" hidden name="kelas_id" value="{{$row->id}}">
      @csrf
      <div class="table-responsive">
          <table id="table-siswa" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tahun Masuk</th>
              </tr>
            </thead>
            <tbody>
              @foreach($row->daftar_kelas as $index => $siswa)
               
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
                  {{$siswa->user_detail->tahun_masuk}}
                  </td>
                </tr>
               
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

       
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-primary">Tambah
        </button>
      </div>

      </form>
    </div>
  </div>
</div>
@endforeach

<div class="modal fade" id="tambah-siswa" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize" id="exampleModalLabel">sinkronkan siswa ke dalam kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action=" {{ url('/data_kelas/store_siswa')}} " method="post">

        <input type="text" id="kelas_id" hidden name="kelas_id" value="">
      @csrf
      <div class="table-responsive">
          <table id="table-tambah-siswa" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tahun Masuk</th>
                <th>tambah</th>

              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>

       
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-primary">Tambah
        </button>
      </div>

      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  
  $(document).ready(function() {
        $('table#table-siswa').DataTable();
        $('table#table-tambah-siswa').DataTable();
        
  });

  function setKelas(kelas_id, kode_kelas) {
    document.querySelector('#kelas_id').value = kelas_id
    console.log(document.querySelector('#kelas_id'));
    const data = {
      'kode_kelas' : kode_kelas
    };
    axios.get('data_kelas/'+kelas_id, {
      params: {
        "kode_kelas" : kode_kelas
      }
    }).
    then((res) => {
      console.log(res)

    

      const tbody = $('table#table-tambah-siswa').find('tbody');
      tbody.empty();
      res.data.data.forEach((element, index) => {
        tbody.append(`
          <tr>
            <td>${index +1}</td>
            <td>${element.nisn_or_nip}</td> 
            <td>${element.name}</td>
            <td>${element.tahun_masuk}</td>
            <td><input type="checkbox" name="user_id[]" value="${element.id}"></td>
          </tr>
        `)
      })
      
      
    })
    .catch((err) => {
      console.log(err.response)
    })
   

    console.log(kelas_id)
  }


  function editData(id){
    console.log(id);
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
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush
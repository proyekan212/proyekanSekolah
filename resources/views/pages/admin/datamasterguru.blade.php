@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active capitalize" aria-current="page" >Data Guru</li>
  </ol>
</nav>

<!-- <div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>Jurnal oleh guru mata pelajaran dibuat untuk seluruh peserta didik yang mengikuti mata pelajarannya, setiap kejadian terhadap guru di dalam kelas mata pelajaran yang Anda ampu dapat dicatat dalam jurnal guru agar dapat dimonitor Wali Kelas dan Guru BK</p>
</div> -->

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Daftar Guru</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Guru</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                 <th>No</th>
                  <th>nip</th>
                  <th>nama</th>
                  <th>tempat lahir</th>
                  <th>tanggal lahir</th>
                  <th>email</th>
                  <th>jenis kelamin</th>
                  <th>tahun masuk</th>
                  <td>Mata Kelas Ajar</td>

              </tr>
            </thead>
            <tbody>
             @foreach($guru as $key=> $guru)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$guru->nisn_or_nip}}</td>
                    <td>{{$guru->name}}</td>
                    <td>{{$guru->tempat_lahir}}</td>
                    <td>{{$guru->tanggal_lahir}}</td>
                    <td>{{$guru->email}}</td>
                    <td>{{$guru->jenis_kelamin}}</td>
                    <td>{{$guru->tahun_masuk}}</td>
                    <td>{{$guru->mapel->nama_mapel}}</td>
                    <td class="flex ">
                        <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            <a href="{{ url('/Data_Master_Guru', $guru->id)}}">
                            edit
                            </a>
                          </span>
                        </button>
                
                      <form method="post" action="{{ url('Data_Master_Guru', $guru->id)}}" onclick="deleteData('{{$guru->id}}', this)" >
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

<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize" id="exampleModalLabel">sinkronkan guru ke dalam kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ url('Data_Master_Guru')}}" method="post">
      @csrf
      
      <div class="modal-body">
      <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Nip</label>
         </div>
         <div class="col-lg-8">
           <input type="text" class="form-control" name="nip">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Nama</label>
         </div>
         <div class="col-lg-8">
           <input type="text" class="form-control" name="nama">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Tempat Lahir</label>
         </div>
         <div class="col-lg-8">
           <input type="text" class="form-control" name="tempat_lahir">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Tanggal Lahir</label>
         </div>
         <div class="col-lg-8">
           <input type="date" class="form-control" name="tanggal_lahir">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Email</label>
         </div>
         <div class="col-lg-8">
           <input type="email" class="form-control" name="email">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Jenis Kelamin</label>
         </div>
         <div class="col-lg-8">
          <select name="jenis_kelamin" class="form-control">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
          </select>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Tahun Masuk</label>
         </div>
         <div class="col-lg-8">
          <input type="text" name="tahun_masuk" class="form-control">
         </div>
       </div>

       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Mapel Kelas Ajar</label>
         </div>
         <div class="col-lg-8">
          <select name="mapel_id" id="">
            @foreach($mapel as $key => $mapel)
              <option value="{{$mapel->id}}">
                {{$mapel->nama_mapel}}
              </option>
            @endforeach
          </select>
         </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>

      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
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
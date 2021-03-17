@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active capitalize" aria-current="page" >daftar siswa kelas</li>
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
          <h6 class="card-title mb-0">Daftar Mata Pelajaran</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Sinkron Data</button>
            <button type="button" class="btn btn-outline-primary">Cetak Excel</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Guru</th>
                  <th>Mata Pelajaran</th>
                  <th>KKM</th>
                  <!-- <th>Kelas</th>
                  <th>Mata Pelajaran</th>
                  <th>KKM</th> -->
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $key => $row) 
                  <tr>
                    <td>
                      {{$key+1}}
                    </td>
                    <td>{{$row->nama_kelas}}</td>            
                    <td>{{$row->guru}}</td>                        
                    <td>{{$row->mata_pelajaran}}</td>            
                    <td>{{$row->kkm}}</td>  
                    <td class="flex ">
                        <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            <a href="{{ url('Jadwal_Pelajaran', $row->id)}}">
                            edit
                            </a>
                          </span>
                        </button>
                
                      <form method="post" action="{{ url('Jadwal_Pelajaran', $row->id)}}" onclick="deleteData('{{$row->id}}', this)" >
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Belajar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="inser_data" method="POST" enctype="multipart/form-data">
        <!--   <div class="form-group">
            <label for="recipient-name">Pilih Kelas:</label>
            <select name="kelas" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showKelas as $value)
              <option value="{{ $value->kode }}">{{ $value->kelas }}</option>
              @endforeach
            </select>
          </div> -->
          <div class="form-group">
            <label for="recipient-name">Pilih Guru:</label>
            <select name="guru" class="form-control form-control-sm mb-3">
              <!-- <option selected>Open this select menu</option> -->
              <option value="Hari">Hari</option>
              <option value="Apri">Apri</option>
              <option value="Iwan Sapta">Iwan Sapta</option>
              <option value="Mursalin">Mursalin</option>
              <option value="Mukayin">Mukayin</option>
            </select>
          </div>
         <!--  <div class="form-group">
            <label for="message-text">Pilih Jurusan:</label>
            <select name="jurusan" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showJurusan as $value)
              <option value="{{ $value->jurusan }}">{{ $value->jurusan }}</option>
              @endforeach
            </select>
          </div> -->
           <div class="form-group">
            <label for="message-text">Pilih Jenjang:</label>
            <select name="nama_semester" class="form-control form-control-sm mb-3">
              <!-- <option selected>Open this select menu</option> -->
              @foreach($showTahunAjaran as $value)
              <option value="{{ $value->nama_semester }}">{{ $value->nama_semester }}</option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="recipient-name">Pilih Kelas:</label>
            <select name="kelas" class="form-control form-control-sm mb-3">
              <!-- <option selected>Open this select menu</option> -->
              @foreach($showKelas as $value)
              <option value="{{ $value->kelas }}">{{ $value->kelas }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text">Pilih Mata Pelajaran:</label>
            <select name="mata_pelajaran" class="form-control form-control-sm mb-3">
              <option selected><!-- Open this select menu --></option>
              @foreach($showMapel as $value)
              <option value="{{ $value->id }}">{{ $value->nama_mapel }}</option>
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
          @csrf
        </form>
      </div>
    </div>
  </div>
</div>
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
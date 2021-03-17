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
          <h6 class="card-title mb-0">Daftar Siswa Tergabung Pada IPA X IPA 1_MIPA Fisika</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Add Kelas</button>
            <button type="button" class="btn btn-outline-primary">Cetak Excel</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Kelas</th>
                <th>Rombongan Belajar</th>
                <th>Kelas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datas as $index => $row)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$row->kode_kelas->kode}}</td>
                  <td> {{$row->rombel->name}}</td>
                  <td class="uppercase">{{$row->kode_kelas->kode}} {{$row->kelas}}</td>               
                  <td class="flex ">
                        <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            <a href="{{ url('/Data_Master_Kelas', $row->id)}}">
                            edit
                            </a>
                          </span>
                        </button>
                
                      <form method="post" action="{{ url('Data_Master_Kelas', $row->id)}}" onclick="deleteData('{{$row->id}}', this)" >
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

<form action="{{ url ('Data_Master_Kelas')}}" method="post">
  @csrf
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
        
        @csrf
      <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Kode Kelas</label>
          </div>
          <div class="col-lg-8">
          <select name="kode_kelas" required class="form-control form-control-sm mb-3">
              <!-- <option selected>- Nama Siswa -</option> -->   
              @foreach($kode_kelas as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
            </div>
            
        </div>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Rombel Kelas</label>
          </div>
          <div class="col-lg-8">
            <select name="rombel" required class="form-control form-control-sm mb-3">
              <!-- <option selected>- Nama Siswa -</option> -->   
              @foreach($rombel_kelas as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Kelas</label>
          </div>
          <div class="col-lg-8">
            <input class="form-control uppercase" required value="" name="kelas" maxlength="10" id="defaultconfig-3" type="text" placeholder="Kelas">
          
          </div>
        </div>
        
      
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
          <button type="submit" class="btn btn-primary">add kelas</button>
        </div>
      </div>
    </div>
  </div>
</form>
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
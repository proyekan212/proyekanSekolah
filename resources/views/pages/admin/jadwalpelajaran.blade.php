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
                  <th>Nama Pelajaran</th>
                  <th>Jurusan</th>
                  <th>KKM</th>
                  <!-- <th>Kelas</th>
                  <th>Mata Pelajaran</th>
                  <th>KKM</th> -->
                </tr>
              </thead>
              <tbody>
                <!-- @foreach($datas as $key => $row) 
                  <tr>
                    <td>
                      {{$key+1}}
                    </td>
                    <td>{{$row->nama_kelas}}</td>            
                    <td>{{$row->guru}}</td>            
                    <td>{{$row->jenjang}}</td>            
                    <td>{{$row->kelas}}</td>            
                    <td>{{$row->mata_pelajaran}}</td>            
                    <td>{{$row->kkm}}</td>                   
                  </tr>
                @endforeach -->
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
        <h5 class="modal-title capitalize" id="exampleModalLabel">tambah mapel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
       
       @csrf
     <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Waktu</label>
         </div>
         <div class="col-lg-8">
           
             <input type="date" name="waktu" class="form-control">
           
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Nama Siswa</label>
         </div>
         <div class="col-lg-8">
           <select name="user_id" class="form-control form-control-sm mb-3">
             <option selected>- Nama Siswa -</option>
             
           </select>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Kejadian Atau Prilaku</label>
         </div>
         <div class="col-lg-8">
           <input class="form-control" name="kejadian" maxlength="10" id="defaultconfig-3" type="text" placeholder="Type Something..">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Butir Sikap</label>
         </div>
         <div class="col-lg-8">
           <select name="butir_sikap" class="form-control form-control-sm mb-3">
             <option selected value="">- Butir Sikap -</option>
             <option value="Tanggung Jawab">Tanggung Jawab</option>
             <option value="Jujur">Jujur</option>
             <option value="Gotong Royong">Gotong Royong</option>
             <option value="Percaya Diri">Percaya Diri</option>
             <option value="Disiplin">Disiplin</option>
           </select>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Positif/Negatif</label>
         </div>
         <div class="col-lg-8">
           <select name="tindakan" class="form-control form-control-sm mb-3">
             <option selected value="">- Pilih Jenis Kejadian -</option>
             <option value="Positif (+)">Positif (+)</option>
             <option value="Negatif (-)">Negatif (-)</option>
           </select>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Tindak Lanjut</label>
         </div>
         <div class="col-lg-8">
           <textarea class="form-control" name="tindak_lanjut" id="defaultconfig-3" rows="3" type="text" placeholder="Type Something.."> 
           </textarea>
         </div>
       </div>
     
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="button" class="btn btn-primary">add mapel</button>
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
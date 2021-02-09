@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Video Conference</li>
  </ol>
</nav>

<div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>E-Meet Video Conference dalam KelasKITA memungkinkan Anda melakukan virtual meeting dengan seluruh Siswa yang tergabung dalam kelas secara Gratis dan tanpa batasan waktu</p>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Video Conference MIPA X-MIPA-1_MIPA Biologi</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Buat Room Virtual Meeting</button>
            <button type="button" class="btn btn-outline-danger" onclick="showSwal('passing-parameter-execute-cancel')">Cetak Excel</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Meeting</th>
                <th>Kode</th>
                <th>partisipan</th>
                <th>Tanggal Meeting</th>
                <th>Selesai</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Pembuatan Virtual Meeting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name">Kapan E-meet Virtual Meeting akan dibuka ?</label>
            <div class="input-group date datepicker" id="datePickerExample">
              <input type="text" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text">Berikan Nama atau Judul Virtual Meeting Anda ?</label>
            <input id="name" class="form-control" name="name" type="text">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="button" class="btn btn-success">Generate Virtual Meeting</button>
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
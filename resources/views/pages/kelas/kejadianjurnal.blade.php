@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kejadian / Jurnal</li>
  </ol>
</nav>

<div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>Jurnal oleh guru mata pelajaran dibuat untuk seluruh peserta didik yang mengikuti mata pelajarannya, setiap kejadian terhadap siswa di dalam kelas mata pelajaran yang Anda ampu dapat dicatat dalam jurnal guru agar dapat dimonitor Wali Kelas dan Guru BK</p>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Jurnal Guru Pada MIPA X-MIPA-1_MIPA Biologi</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Kejadian</button>
            <button type="button" class="btn btn-outline-danger" onclick="showSwal('passing-parameter-execute-cancel')">Cetak Excel</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>Nama Siswa</th>
                <th>Kejadian/Perilaku</th>
                <th>Butir Sikap</th>
                <th>Pos/Neg</th>
                <th>Tindak Lanjut</th>
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Jurnal Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Waktu</label>
            </div>
            <div class="col-lg-8">
              <div class="input-group date datepicker" id="datePickerExample">
                <input type="text" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama Siswa</label>
            </div>
            <div class="col-lg-8">
              <select name="jurusan" class="form-control form-control-sm mb-3">
                <option selected>- Nama Siswa -</option>
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Kejadian Atau Prilaku</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Butir Sikap</label>
            </div>
            <div class="col-lg-8">
              <select name="jurusan" class="form-control form-control-sm mb-3">
                <option selected>- Butir Sikap -</option>
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
              <select name="jurusan" class="form-control form-control-sm mb-3">
                <option selected>- Pilih Jenis Kejadian -</option>
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
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="button" class="btn btn-success">Simpan Kejadian</button>
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
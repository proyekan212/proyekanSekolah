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
    <li class="breadcrumb-item active" aria-current="page">RPP</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Rencana Pembelajaran Pada MIPA X-MIPA-1_MIPA Biologi</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Buat Rencana Pembelajaran</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Hari/Tanggal</th>
                <th>Jam</th>
                <th>Pertemuan</th>
                <th>Materi</th>
                <th>KI/KD</th>
                <th>Tambahan</th>
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

<div class="modal fade TambahData" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Kelas RPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Tanggal (*)</label>
            </div>
            <div class="col-lg-8">
              <div class="input-group date datepicker" id="datePickerExample">
                <input type="text" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Jam Ke (*)</label>
            </div>
            <div class="col-lg-3">
              <select name="jurusan" class="form-control form-control-sm mb-3">
                <option selected>- Pilih Jam Ke -</option>
                <option value=""></option>
              </select>
            </div>
            <div class="col-lg-2">
              <label class="col-form-label">Sampai Ke (*)</label>
            </div>
            <div class="col-lg-3">
              <select name="jurusan" class="form-control form-control-sm mb-3">
                <option selected>- Pilih Jam Ke -</option>
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Pertemuan Ke (*)</label>
            </div>
            <div class="col-lg-8">
              <select name="jurusan" class="form-control form-control-sm mb-3">
                  <option selected>- Pilih Pertemuan -</option>
                  <option value=""></option>
                </select>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Bahasan Materi (*)</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kompetensi Inti (KI) (*)</label>
            </div>
            <div class="col-lg-8">
              <select name="jurusan" class="form-control form-control-sm mb-3">
                <option selected>- Pilih Kompetensi Inti (KI) -</option>
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kompetensi Dasar (KD) (*)</label>
            </div>
            <div class="col-lg-8">
              <select name="jurusan" class="form-control form-control-sm mb-3">
                <option selected>- Pilih Kompetensi Dasar (KD) -</option>
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Tujuan Pembelajaran (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="tinymce" id="simpleMdeExample" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group mb-0 row">
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
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
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
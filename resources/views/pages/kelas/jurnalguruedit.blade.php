@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penilaian Pengetahuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="{{ url('kelas/jurnal_guru', $datas->id)}}">
        {{ method_field('PATCH')}}

        @csrf
      <div class="modal-body">
        
          <input type="text" hidden name="kelas_id" value="1">
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Tanggal</label>
            </div>
            <div class="col-lg-8">
              <input type="date" value="{{$datas->waktu}}" name="waktu" class="form-control"  />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Pertemuan ke (*)</label>
            </div>
            <div class="col-lg-8">
            <select name="pertemuan" class="form-control form-control-sm mb-3">
                  <option selected>- Pilih Pertemuan -</option>
                  <?php
                    for ($x = 1; $x <= 4; $x++) { 
                      echo "<option value='pertermuan $x'> pertemuan $x</option> ";
                    }
                  ?>
                </select>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Materi</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" value="{{$datas->materi}}"  name="materi" id="simpleMdeExample" rows="10"></textarea>
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
             <a href="{{url('dashboard')}}">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        </a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
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
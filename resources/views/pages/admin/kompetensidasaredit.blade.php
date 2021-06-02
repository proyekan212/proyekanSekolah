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

  <form method="POST" action="{{ url('Kompetensi_Dasar', $datas->id)}}">
    {{ method_field('PATCH')}}

    @csrf
    <div class="modal-body">
      <div class="form-group row">
        <div class="col-lg-3">
          <label class="col-form-label">Kompetensi Inti</label>
        </div>
        <div class="col-lg-8">
          <select value="{{$datas->kompetensi_inti_id}}" name="kompetensi_inti" id="">
            @foreach($kompetensi_inti as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-3">
          <label class="col-form-label">Semester</label>
        </div>
        <div class="col-lg-8">
          <select value="{{$datas->semester_id}}" name="semester" id="">
            @foreach($semester as $semester)
            <option value="{{$semester->id}}">{{$semester->nama_semester}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-lg-3">
          <label class="col-form-label">Kompetensi Dasar</label>
        </div>
        <div class="col-lg-8">
          <input type="text" class="form-control" value="{{$datas->nama_kompetensi_dasar}}" name="kompetensi_dasar">
        </div>
      </div>

    </div>
    <div class="modal-footer">
           <a href="{{url('dashboard')}}">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        </a>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </div>

  </form>
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
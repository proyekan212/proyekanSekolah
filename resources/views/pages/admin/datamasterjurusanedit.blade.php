@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Kejadian Jurnal Siswa</h5>
      </div>
      <form method="POST" action="{{ url('Data_Master_Jurusan', $datas->id)}}">
        @csrf

        {{ method_field('PATCH')}}
      
      <div class="modal-body">
       
          @csrf
    <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Nama Jurusan</label>
         </div>
         <div class="col-lg-8">
           <input type="text" value="{{$datas->jurusan}}" class="form-control" name="jurusan">
         </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-primary">Tambah</button>
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
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

  <form method="POST" action="{{ url('tahun_akademik', $datas->id)}}">
    {{ method_field('PATCH')}}

    @csrf
          <div class="modal-body">
    

       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Tambah Tahun Akademik</label>
         </div>
         <div class="col-lg-8">
           <input type="text" value="{{$datas->tahun_akademik}}" name="tahun_akademik" class="form-control"> 
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
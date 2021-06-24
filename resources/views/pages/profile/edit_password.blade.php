@extends('layout.master')

@section('content')
@push('plugin-styles')
<link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

 <form action="{{ url('update_password_user', $showUserDetail->user_id)}}" enctype="multipart/form-data" method="post">
     @csrf
 
        
      
      <div class="modal-body">
      <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Nip</label>
         </div>
         <div class="col-lg-8">
           <input type="text" class="form-control" value="{{ $showUserDetail->nisn_or_nip }}" name="nip">
         </div>
       </div>
         <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Password</label>
         </div>
         <div class="col-lg-8">
           <input type="text" class="form-control" value="" name="password">
         </div>
       </div>
         </div>
      <div class="modal-footer">
            <a href="{{url('dashboard')}}">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        </a>
        <button type="submit" class="btn btn-primary">Simpan</button>
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
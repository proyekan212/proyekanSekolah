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
      <form method="POST" action="{{ url('data_master_mapel', $datas->id)}}">
        @csrf

        {{ method_field('PATCH')}}
      
      <div class="modal-body">
       
          @csrf
        <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Nama Mapel</label>
         </div>
         <div class="col-lg-8">
           <input type="text" value="{{$datas->nama_mapel}}" name="mapel" class="form-control"> 
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Jurusan</label>
         </div>
         <div class="col-lg-8">
           <select class="form-control" value="{{$datas->jurusan}}"  name="jurusan"  id="defaultconfig-3" type="text" placeholder="Type Something..">
            <option value="">-- jurusan --</option>
            @foreach($jurusan as $row) 
              <option value="{{$row->id}}">
                {{$row->jurusan}}
              </option>

              @endforeach
            </select>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">KKM</label>
         </div>
         <div class="col-lg-8">
           <select name="kkm" class="form-control form-control-sm mb-3">
              <option value="">- KKM -</option>

              @foreach($kkm as $row) 
              <option value="{{$row->id}}">
                {{$row->kkm}}
              </option>

              @endforeach
           </select>
         </div>
       </div>

     
   </div>
      
    </div>
        <div class="modal-footer">
              <a href="{{url('dashboard')}}">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        </a>
          <button type="submit" class="btn btn-primary">add kelas</button>
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
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
      <form method="POST" action="{{ url('Data_Master_Kelas', $datas->id)}}">
        @csrf

        {{ method_field('PATCH')}}
      
      <div class="modal-body">
       
          @csrf
         <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Kode Kelas</label>
          </div>
          <div class="col-lg-8">
          <select name="kode_kelas" required class="form-control form-control-sm mb-3">
              <!-- <option selected>- Nama Siswa -</option> -->   
              @foreach($kode_kelas as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
            </div>
            
        </div>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Rombel Kelas</label>
          </div>
          <div class="col-lg-8">
            <select name="rombel" required class="form-control form-control-sm mb-3">
              <!-- <option selected>- Nama Siswa -</option> -->   
              @foreach($rombel_kelas as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Kelas</label>
          </div>
          <div class="col-lg-8">
            <input class="form-control uppercase" required value="{{$datas->kelas}}" name="kelas" maxlength="10" id="defaultconfig-3" type="text" placeholder="Kelas">
          
          </div>
        </div>
        
      
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
          <button type="submit" class="btn btn-primary">add kelas</button>
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
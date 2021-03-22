@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="w-full">
      <div class="bg-white shadow-md rounded-xl p-6 w-full h-full">
        <form method="post" action="{{ url('kelas/pengaturan_kelas', Session::get('kelas_mapel'))}}">
          @csrf
          {{method_field('patch')}}
         <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Setting KKM</label>
            </div>
            
            <div class="col-lg-8">
                <input type="number" required value="{{$data->kkm}}"  placeholder="" name="kkm" class="form-control">  
            </div>  
        </div>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Setting Pertemuan</label>
          </div>
          
          <div class="col-lg-8">
              <input type="number" required value="{{$data->pertemuan}}"  placeholder="" name="pertemuan" class="form-control">  
            </div>
            
          </div>
          <button type="submit" class="px-4 rounded-xl py-2 text-white bg-blue-400 text-xs font-semibold">
           Change Settings
          </button>
          
          </form>
          
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
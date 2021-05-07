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

  <form method="POST" action="{{ url('data_kelas', $datas->id)}}">
    {{ method_field('PATCH')}}

    @csrf
         <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">Kelas</label>
              </div>
              <div class="col-lg-8">
              <select name="kelas" id="">
              @foreach($master_kelas as $row)
                    <option value="{{$row->id}}">
                      {{$row->kelas}}
                    </option>
                  @endforeach
              </select>
                 
               </div>
              
            
          </div>

          <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">Tahun Akademik</label>
              </div>
              <div class="col-lg-8">
              
                  <select name="tahun_akademik" id="">
                    @foreach($tahun_akademik as $row)
                      <option value="{{$row->id}}">
                        {{$row->tahun_akademik}}
                      </option>
                    @endforeach
                  </select>
              </div>
              
            
          </div>

          <div class="form-group row">
              <div class="col-lg-3">
                <label class="col-form-label">Rombel</label>
              </div>
              <div class="col-lg-8">
                   <select name="rombel" id="">
                    @foreach($rombel as $row)
                      <option value="{{$row->id}}">
                        {{$row->name}}
                      </option>
                    @endforeach
                  </select>
                </div>

          </div>
      </div>

       
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-primary">Tambah
        </button>
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
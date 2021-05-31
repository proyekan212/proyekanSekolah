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

        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Block Siswa</label>
          </div>
          
            <div class="col-lg-8">
              <div  class="overflow-y-auto">
                <table class="table table-striped table-bordered">
                  <tr class="text-green-600">
                    <th>
                      Block
                    </th>
                    <th>
                    Nama Siswa
                    </th>
                  </tr>
                  @foreach($siswa as $index => $sw)
                  @if($sw->blocklist->count() == 0)
                  <tr>
                    <td>
                      <input type="checkbox" value="{{$sw->id}}" name="siswa[]">
                    </td>
                    <td class="text-green-500">
                      {{$sw->user_detail->name}}
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </table>

                <table class="md:mt-8 mt-4">
                <table class="table table-striped table-bordered">
                  <tr class="text-red-600">
                    <th>
                      Ublock
                    </th>
                    <th>
                    Nama Siswa
                    </th>
                  </tr>
                  @foreach($siswa as $index => $sw)
                  
                    @if($sw->blocklist->first() != null)
                    <tr>
                      <td>
                        <input type="checkbox" value="{{$sw->blocklist->first()->id}}" name="unblock_siswa[]">
                      </td>
                      <td class="text-red-500">
                        {{$sw->user_detail->name}}
                      </td>
                   </tr>
                    @endif
                  @endforeach
                </table>
                </table>
              </div> 
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
@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Admin 
    
    </a></li>
    <li class="breadcrumb-item active" aria-current="page">Monitoring Aktivitas Siswa</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Monitoring Aktivitas Siswa</h6>
          <div class="dropdown mb-2">
            
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>NISN</th>
                <th>Jenis Kelamin</th>
               <th>Status</th>
              </tr>
            </thead>
            <tbody>
                   @foreach($user_detail as $index => $row) 
                    <tr>
                      <td>
                        {{$index + 1}}
                      </td>
                      <td>
                        {{$row->name}}
                      </td>
                         <td>
                        {{$row->nisn_or_nip}}
                      </td>
                         <td>
                        {{$row->jenis_kelamin}}
                      </td>
                     @if($row->user->active)
                         <td class="text-xs text-green-600 capitalize">  
                            online
                        </td>

                      @else 
                         <td class="text-xs text-red-600 capitalize">  
                        offline
                        </td>

                      @endif
                    </tr>
                  @endforeach
            </tbody>
          </table>
        </div>
      </div>
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
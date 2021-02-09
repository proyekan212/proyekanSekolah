@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Teacher</a></li>
    <li class="breadcrumb-item active" aria-current="page">Absensi</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Absensi Anda</h6>
        <p class="card-description">
        
        </p>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>25 Desember 2020</td>
                <td>Hadir</td>
                <td>Anda melakukan kehadiran pada 25 Desember 2020 Pukul 10:50:23</td>
              </tr>
              <tr>
                <td>2</td>
                <td>26 Desember 2020</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>3</td>
                <td>27 Desember 2020</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>4</td>
                <td>28 Desember 2020</td>
                <td>Hadir</td>
                <td>Anda melakukan kehadiran pada 28 Desember 2020 Pukul 08:50:23</td>
              </tr>
              <tr>
                <td>4</td>
                <td>29 Desember 2020</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>5</td>
                <td>30 Desember 2020</td>
                <td>Hadir</td>
                <td>Anda melakukan kehadiran pada 30 Desember 2020 Pukul 10:50:23</td>
              </tr>
              <tr>
                <td>6</td>
                <td>31 Desember 2020</td>
                <td>-</td>
                <td>-</td>
              </tr>
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
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
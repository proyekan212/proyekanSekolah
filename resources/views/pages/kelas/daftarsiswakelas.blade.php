@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active capitalize" aria-current="page" >daftar siswa kelas</li>
  </ol>
</nav>

<!-- <div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>Jurnal oleh guru mata pelajaran dibuat untuk seluruh peserta didik yang mengikuti mata pelajarannya, setiap kejadian terhadap siswa di dalam kelas mata pelajaran yang Anda ampu dapat dicatat dalam jurnal guru agar dapat dimonitor Wali Kelas dan Guru BK</p>
</div> -->

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Daftar Siswa Tergabung Pada IPA X IPA 1_MIPA Fisika</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Sinkron Data</button>
            <button type="button" class="btn btn-outline-primary">Cetak Excel</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>FOTO</th>
                <th>NISN</th>
                <th>NAMA</th>
                <th>L/P</th>
                <th>TTL</th>
                <th>KELAS</th>
                <th>STATUS</th>
                <th>TERAKHIR AKTIF</th>
              </tr>
            </thead>
            <tbody>
              @foreach($siswa as $index => $row)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$row->photo}}</td>
                  <td>{{$row->nisn_or_nip}}</td>
                  <td class="capitalize">{{$row->name}}</td>
                  <td>{{$row->jenis_kelamin}}</td>
                  <td class="capitalize">{{$row->tempat_lahir}}, {{$row->tanggal_lahir}}</td>
                  <td>{{$row->kelas->kelas}}</td>
                  <td class="capitalize">@if($row->status == 0)
                      <span class="text-danger">
                        offline
                      </span>
                      @else 
                      <span class="text-success">
                        Online
                      </span>

                      @endif
                  </td>
                  <td>
                  tergabung</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize" id="exampleModalLabel">sinkronkan siswa ke dalam kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>FOTO</th>
                <th>NISN</th>
                <th>NAMA</th>
                <th>L/P</th>
                <th>TTL</th>
                <th>KELAS</th>
                <th>ROMBEL</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach($siswa as $index => $row)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$row->photo}}</td>
                  <td>{{$row->nisn_or_nip}}</td>
                  <td class="capitalize">{{$row->name}}</td>
                  <td>{{$row->jenis_kelamin}}</td>
                  <td class="capitalize">{{$row->tempat_lahir}}, {{$row->tanggal_lahir}}</td>
                  <td>{{$row->kelas->kelas}}</td>
                  <td class="uppercase">
                    IPA X IPA 1
                  </td>
                  <td></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="button" class="btn btn-primary">Sinkronkan</button>
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
@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active capitalize" aria-current="page" >Daftar Kompetensi Inti</li>
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
          <h6 class="card-title mb-0">Daftar Kompetensi Inti</h6>
          <div class="dropdown mb-2">
            <!--<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Kompetensi Inti</button>-->
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $key => $row) 
                  <tr>
                    <td>
                      {{$key+1}}
                    </td>
                    <td>{{$row->kode}}</td>              
                    <td>{{$row->name}}</td>              
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
                  <th>Kode</th>
                  <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $key => $row) 
                  <tr>
                    <td>
                      {{$key+1}}
                    </td>
                    <td>{{$row->kode}}</td>              
                    <td>{{$row->name}}</td>              
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
@endsection
<script type="text/javascript">
  function editData(id){
    console.log(id);
  }
  function deleteData(id, event) {
    Swal.fire({
      title: 'Apakah yakin menghapus data ini ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if(result.value) {
        event.submit();

        }
    })
  }
</script>
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
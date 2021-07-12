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
      
      
      <div class="w-64 p-4">
        Absen
        <form action="{{ url ('/kelas/absen_guru')}}" method="post">
            <div class="mb-2">
            @csrf
                <select name="pertemuan" class="form-control" id="">
                  <?php
                    
                    $current = $kelas_mapel->current_pertemuan;

                    if($current == null) {
                      $current = 1; 
                    }
                    else {
                      $current = $current+1;
                    }

                    for($i = $current; $i < $kelas_mapel->pertemuan; $i++) 
                    {

                      echo "<option value='$i'>Pertemuan $i</option>";
                    }
                  
                  ?>
              </select>
            </div>
            <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-4 font-semibold rounded-xl">Absen</button>
        </form>
      </div>
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
                <th>pertemuan</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
             @foreach($absens as $index => $absen) 
                    <tr>
                      <td>
                      {{$index + 1}}
                      </td>
                      <td>
                      {{$absen->created_at}}
                      </td>
                      <td>
                      Petemuan {{$absen->pertemuan}}
                      </td>

                      <td>
                        <span class="text-green-500">

                          {{$absen->status}}
                        </span>
                      </td>
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
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kompetensi Dasar</li>
  </ol>
</nav>
 
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Kompetensi Inti(KI) dan Kompetensi Dasar (KD) MIPA X-MIPA-1_MIPA Biologi</h6>
         <!--  <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Sesuaikan Kompetensi</button>
          </div> -->
        </div>
        
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="card-title mb-0">KOMPETENSI INTI (KI)</th>
                <th class="card-title mb-0">KOMPETENSI DASAR (KD)</th>
              </tr>
            </thead>
            <tbody>

              @foreach($kompetensi_inti as $index => $row)

              <tr>
                <td class=""><span class="capitalize text-lg ">
                {{$index+1}} - {{$row->name}}</span>
                </td>
                <td>
                <div class="flex items-center">
                <b class="capitalize font-semibold text-base">Semester Ganjil</b>
                   <a href="" class="pl-4">
                      <i class="fas fa-edit">
                      </i>
                   </a>
                 </div>
                  
                  <ul class="mt-2">
                    @foreach($row->kompetensi_dasar as $index_kd => $kd)

                    @if($kd->semester->nama_semester == 'ganjil')
                    <li class="text-sm">
                      <b>{{$index+1}}.{{$index_kd}}</b> {{$kd->nama_kompetensi_dasar}} 
                    </li>
                    <li class="flex">
                      
                    </li>
                    @endif

                    @endforeach
                    <!-- <li>3.1 Menerapkan prinsip-prinsip pengukuran besaran fisis, ketepatan, ketelitian dan angka penting, serta notasi ilmiah</li>
                    <li>3.2 Menerapkan prinsip penjumlahan vektor sebidang (misalnya perpindahan)</li>
                    <li>3.3 Menganalisis besaran-besaran fisis pada gerak lurus dengan kecepatan konstan (tetap) dan gerak lurus dengan percepatan konstan (tetap) berikut penerapannya dalam kehidupan sehari- hari misalnya keselamatan lalu lintas</li>
                    <li>3.4 Menganalisis gerak parabola dengan menggunakan vektor, berikut makna fisisnya dan penerapannya dalam kehidupan sehari-hari</li>
                    <li>3.5 Menganalisis besaran fisis pada gerak melingkar dengan laju konstan (tetap) dan penerapannya dalam kehidupan sehari-hari</li>
                    <li>3.6 Menganalisis interaksi pada gaya serta hubungan antara gaya, massa dan gerak lurus benda serta penerapannya dalam kehidupan sehari-hari</li>
                    <li>3.7 Menganalisis konsep energi, usaha (kerja), hubungan usaha (kerja) dan perubahan energi, hukum kekekalan energi, serta penerapannya dalam peristiwa sehari-hari</li>
                    <li>3.8 Menerapkan konsep momentum dan impuls, serta hukum kekekalan momentum dalam kehidupan sehari- hari</li>
                    <li>3.9 Menganalisis hubungan antara gaya dan getaran dalam kehidupan sehari- hari</li> -->
                  </ul>
                  <br/>

                  <b class="capitalize font-semibold text-base"> Semester Genap</b>
                  <ul class="mt-2">
                  @foreach($row->kompetensi_dasar as $index_kd => $kd)

                    @if($kd->semester->nama_semester == 'genap')
                    <li class="text-sm">
                      <b>{{$index+1}}.{{$index_kd}}</b> {{$kd->nama_kompetensi_dasar}} 
                    </li>

                    @endif

                    @endforeach
                    </ul>


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
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush
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
          <!-- <h6 class="card-title mb-0">Kompetensi Inti(KI) dan Kompetensi Dasar (KD) MIPA X-MIPA-1_MIPA Biologi</h6> -->
          <!-- <div class="dropdown mb-2">
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
              @if($row->id == 1)
              <tr>
                <td class=""><span class="capitalize text-lg ">
                {{$index+1}} - Pengetahuan</span>
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
                    @foreach($kompetensi_dasar as $index_kd => $kd)
                    @if($kd->kompetensi_dasar->semester->nama_semester == 'ganjil')
                    @if($kd->kompetensi_dasar->kompetensi_inti_id == 1)
                    <li class="text-sm">
                      <b>{{$index+1}}.{{$index_kd}}</b> {{$kd->kompetensi_dasar->nama_kompetensi_dasar}} 
                    </li>
                    <li class="flex">
                      
                    </li>
                    @endif
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
                  @foreach($kompetensi_dasar as $index_kd => $kd)
                  @if($kd->kompetensi_dasar->semester->nama_semester == 'genap')
                  @if($kd->kompetensi_dasar->kompetensi_inti_id == 1)

                    <li class="text-sm">
                      <b>{{$index+1}}.{{$index_kd}}</b> {{$kd->kompetensi_dasar->nama_kompetensi_dasar}} 
                    </li>
                    <li class="flex">
                      
                    </li>
                    @endif
                    @endif

                    @endforeach
                    </ul>


                </td>
              </tr>
               @else
               <tr>
                <td class=""><span class="capitalize text-lg ">
                {{$index+1}} - Keterampian</span>
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
                    @foreach($kompetensi_dasar as $index_kd => $kd)
                    @if($kd->kompetensi_dasar->semester->nama_semester == 'ganjil')
                    @if($kd->kompetensi_dasar->kompetensi_inti_id == 2)
                    <li class="text-sm">
                      <b>{{$index+1}}.{{$index_kd}}</b> {{$kd->kompetensi_dasar->nama_kompetensi_dasar}} 
                    </li>
                    <li class="flex">
                      
                    </li>
                    @endif
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
                  @foreach($kompetensi_dasar as $index_kd => $kd)
                  @if($kd->kompetensi_dasar->semester->nama_semester == 'genap')
                  @if($kd->kompetensi_dasar->kompetensi_inti_id == 2)
                    <li class="text-sm">
                      <b>{{$index+1}}.{{$index_kd}}</b> {{$kd->kompetensi_dasar->nama_kompetensi_dasar}} 
                    </li>
                    <li class="flex">
                      
                    </li>
                    @endif
                    @endif

                    @endforeach
                    </ul>


                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade TambahData" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kompetensi Dasar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('kelas/kompetensi_dasar')}}">
        @csrf
      <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kompetensi Dasar (KD) (*)</label>
            </div>
            <div class="col-lg-8">
                @foreach($kompetensi_dasar as $data) 
                    <p class="flex items-center mb-1 md:mb-2">
                      <input type="checkbox" name="kompetensi_dasar[]" value="{{$data->id}}">
                      <span class=" capitalize pl-2 text-xs lg:text-sm">
                      {{$data->nama_kompetensi_dasar}}
                      </span>
                    </p>   
                @endforeach
            </div>
          </div>
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
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
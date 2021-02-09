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
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success">Sesuaikan Kompetensi</button>
          </div>
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
              <tr>
                <td>3 - Pengetahuan</td>
                <td>
                  <b>Semester Ganjil</b>
                  <ul>
                    <li>3.1 Menerapkan prinsip-prinsip pengukuran besaran fisis, ketepatan, ketelitian dan angka penting, serta notasi ilmiah</li>
                    <li>3.2 Menerapkan prinsip penjumlahan vektor sebidang (misalnya perpindahan)</li>
                    <li>3.3 Menganalisis besaran-besaran fisis pada gerak lurus dengan kecepatan konstan (tetap) dan gerak lurus dengan percepatan konstan (tetap) berikut penerapannya dalam kehidupan sehari- hari misalnya keselamatan lalu lintas</li>
                    <li>3.4 Menganalisis gerak parabola dengan menggunakan vektor, berikut makna fisisnya dan penerapannya dalam kehidupan sehari-hari</li>
                    <li>3.5 Menganalisis besaran fisis pada gerak melingkar dengan laju konstan (tetap) dan penerapannya dalam kehidupan sehari-hari</li>
                    <li>3.6 Menganalisis interaksi pada gaya serta hubungan antara gaya, massa dan gerak lurus benda serta penerapannya dalam kehidupan sehari-hari</li>
                    <li>3.7 Menganalisis konsep energi, usaha (kerja), hubungan usaha (kerja) dan perubahan energi, hukum kekekalan energi, serta penerapannya dalam peristiwa sehari-hari</li>
                    <li>3.8 Menerapkan konsep momentum dan impuls, serta hukum kekekalan momentum dalam kehidupan sehari- hari</li>
                    <li>3.9 Menganalisis hubungan antara gaya dan getaran dalam kehidupan sehari- hari</li>
                  </ul>
                  <br/>
                  <b>Semester Genap</b>
                  <ul>
                    <li>3.10</li>
                    <li>3.11</li>
                    <li>3.12</li>
                    <li>3.13</li>
                    <li>3.14</li>
                    <li>3.15 Menganalisis interaksi pada gaya serta hubungan antara gaya, massa dan gerak lurus benda serta penerapannya dalam kehidupan sehari-hari</li>
                    <li>3.16 Menganalisis konsep energi, usaha (kerja), hubungan usaha (kerja) dan perubahan energi, hukum kekekalan energi, serta penerapannya dalam peristiwa sehari-hari</li>
                    <li>3.17 Menerapkan konsep momentum dan impuls, serta hukum kekekalan momentum dalam kehidupan sehari-hari</li>
                    <li>3.18 Menganalisis hubungan antara gaya dan getaran dalam kehidupan seharihari</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>4 - Keterampilan</td>
                <td>
                  <b>Semester Ganjil</b>
                  <ul>
                    <li>4.1 Menyajikan hasil pengukuran besaran fisis berikut ketelitiannya dengan menggunakan peralatan dan teknik yang tepat serta mengikuti kaidah angka penting untuk suatu penyelidikan ilmiah</li>
                    <li>4.2 Merancang percobaan untuk menentukan resultan vektor sebidang (misalnya perpindahan) beserta presentasi hasil dan makna fisisnya</li>
                    <li>4.3 Menyajikan data dan grafik hasil percobaan gerak benda untuk menyelidiki karakteristik gerak lurus dengan kecepatan konstan (tetap) dan gerak lurus dengan percepatan konstan (tetap) berikut makna fisisnya</li>
                    <li>4.4 Mempresentasikan data hasil percobaan gerak parabola dan makna fisisnya</li>
                    <li>4.5 Melakukan percobaan berikut presentasi hasilnya tentang gerak melingkar, makna fisis dan pemanfaatannya</li>
                    <li>4.6 Melakukan percobaan berikut presentasi hasilnya terkait gaya serta hubungan gaya, massa dan percepatan dalam gerak lurus benda dengan menerapkan metode ilmiah</li>
                    <li>4.7 Menerapkan metode ilmiah untuk mengajukan gagasan penyelesaian masalah gerak dalam kehidupan sehari- hari, yang berkaitan dengan konsep energi, usaha (kerja) dan hukum kekekalan energi</li>
                    <li>4.8 Menyajikan hasil pengujian penerapan hukum kekekalan momentum, misalnya bola jatuh bebas ke lantai dan roket sederhana</li>
                    <li>4.9 Melakukan percobaan getaran harmonis pada ayunan sederhana dan/atau getaran pegas berikut presentasi hasil</li>
                  </ul>
                  <br/>
                  <b>Semester Genap</b>
                  <ul>
                    <li>3.10</li>
                    <li>3.11</li>
                    <li>3.12</li>
                    <li>3.13</li>
                    <li>3.14</li>
                    <li>3.15 Melakukan percobaan berikut presentasi hasilnya terkait gaya serta hubungan gaya, massa dan percepatan dalam gerak lurus benda dengan menerapkan metode ilmiah</li>
                    <li>3.16 Menerapkan metode ilmiah untuk mengajukan gagasan penyelesaian masalah gerak dalam kehidupan seharihari, yang berkaitan dengan konsep energi, usaha (kerja) dan hukum kekekalan energi</li>
                    <li>3.17 Menyajikan hasil pengujian penerapan hukum kekekalan momentum, misalnya bola jatuh bebas ke lantai dan roket sederhana</li>
                    <li>3.18 Melakukan percobaan getaran harmonis pada ayunan sederhana dan/atau getaran pegas berikut presentasi hasil percobaan serta makna fisisnya</li>
                  </ul>
                </td>
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
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush
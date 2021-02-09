@extends('layout.master')

@section('content')
<div class="profile-page tx-13">
  <div class="row profile-body"> 
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-8 col-xl-8 left-wrapper">
      <div class="card rounded">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Statistik Kelas</h6>
            <div class="dropdown mb-2">

            </div>
          </div>
          <div class="table-responsive">
            <table id="dataMapel" class="table table-striped">
              <thead>
                <tr class="text-center">
                  <th>KD</th>
                  <th>Jumlah Materi</th>
                  <th>Jumlah Penilaian Pengetahuan	</th>
                  <th>Jumlah Penilaian Keterampilan</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>KD 1</td>
                  <td>2</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>KD 2</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>KD 3</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>KD 4</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>KD 5</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>KD 6</td>
                  <td>6</td>
                  <td>1</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>KD 7</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>KD 8</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>KD 9</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- left wrapper end --> 
    <!-- middle wrapper start -->
    <div class="col-4">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <div class="ml-2">
                    <p>IPS X-Ips-1_MIPA Biologi</p>
                    <p class="tx-11 text-muted">Mata Pelajaran IPS Biologi Kelas Kelas X</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <p class="mb-3 tx-14">Erni Wiyanti, S.Pd., M.M.</p>
              <p class="mb-3 tx-14">Mata Pelajaran MIPA Biologi Kelas Kelas X 8 Pertemuan</p>
              <p class="mb-3 tx-14">36 Siswa | Max KD : 9 | KKM : 75</p>
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                  <i class="icon-md" data-feather="inbox"></i>
                  <p class="d-none d-md-block ml-2">Kelas dibuat pada 08 Januari 2021 Pukul 09:25:05</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- middle wrapper end -->
  </div>
</div>
@endsection
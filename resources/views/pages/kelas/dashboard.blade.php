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
                @foreach($kompetensi_dasar as $kd)
                <tr>
                  <td>KD {{$kd->id}}</td>
                  <td>2</td>
                  <td>{{$kd->penilaian_pengetahuan->count()}}</td>
                  <td>{{$kd->penilaian_keterampilan->count()}}</td>
                </tr>
                @endforeach
                
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
                    <p class="capitalize">{{$kelas->rombel->jurusan->jurusan}} {{$kelas->master_kelas->kode_kelas->kode}} {{$kelas->kelas}} {{$kelas->rombel->name}}</p>
                    <p class="tx-11 text-muted capitalize">Mata Pelajaran {{$kelas_mapel->master_mapel->nama_mapel}} {{$kelas->rombel->jurusan->jurusan}} Kelas {{$kelas->master_kelas->kelas}} {{$kelas->master_kelas->kode_kelas->kode}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <p class="mb-3 tx-14 capitalize" >{{$user->user_detail->name}}</p>
              <p class="mb-3 tx-14 capitalize ">Mata Pelajaran {{$kelas->rombel->jurusan->jurusan}} {{$kelas->master_kelas->kelas}} {{$kelas->master_kelas->kode_kelas->kode}} {{$kelas_mapel->pertemuan}} Pertemuan</p>
              <p class="mb-3 tx-14">{{$kelas->daftar_kelas->count()}} Siswa | Max KD : 9 | KKM : 75</p>
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                  <i class="icon-md" data-feather="inbox"></i>
                  <p class="d-none d-md-block ml-2">Kelas dibuat pada {{$kelas_mapel->created_at->format('d F Y')}}</p>
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
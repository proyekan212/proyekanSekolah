@extends('layout.master')

@section('content')
<div class="profile-page tx-13">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="profile-header">
        <div class="cover">
          <div class="gray-shade"></div>
          <figure>
            <img src="{{ url('https://via.placeholder.com/1148x272') }}" class="img-fluid" alt="profile cover">
          </figure>
          <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
              <img class="profile-pic" src="{{ url('https://via.placeholder.com/100x100') }}" alt="profile">
              <span class="profile-name">Amiah Burton</span>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-primary btn-icon-text btn-edit-profile">
                <i data-feather="eye" class="btn-icon-prepend"></i> Edit profile
              </button>
            </div>
          </div>
        </div>
        <div class="header-links">
          
        </div>
      </div>
    </div>
  </div>
</div>

<div id="kelas" class="md:p-6 w-full lg:p-8 p-4">
    <h2 class="lg:text-lg text-base font-semibold text-blue-600">
    Tahun Ajaran 2020/2021 - Semester Genap
    </h2>
    <div class="grid md:gap-8 lg:gap-6 gap-4 md:grid-cols-2 mt-4 md:mt-6 lg:mt-8 lg:grid-cols-3">
      @foreach($kelas as $row)
      <div id="card" class="w-full bg-blue-50 md:p-4 p-3 rounded-md shadow-md">
        <div id="card-content" class="flex flex-col items-center">
            <h3 class="capitalize text-blue-500 mb-1 md:mb-2 md:text-base text-sm">
            {{$row->rombel->jurusan->name}} {{$row->kode_kelas->kode}} {{$row->kelas}} {{$row->rombel->name}} Fisika
            </h3>
            <p class="capitalize text-gray-400 mb-2 md:mb-4 lg:mb-6 ">
            Mata Pelajaran MIPA {{$row->rombel->name}} {{$row->kode_kelas->name}}
            </p>
            <div class="mb-2 md:mb-4 lg:mb-6">
              <table class="w-full text-gray-600">
                <tr>
                  <td class="px-2 border-r-2 border-gray-500">Siswa: {{$row->daftar_kelas->count()}}</td>
                  <td class="px-2 border-r-2 border-gray-500">Max KD: 7</td>
                  <td class="px-2 "> KKM: 75  </td>
                </tr>
              </table>
            </div>

            <form class="w-full" method="post" action="{{ url ('kelas')}}">
              @csrf
              <input type="text" hidden name="kelas_id" value="{{$row->id}}">
              <button type="submit" class="w-full md:mt-4 rounded-xl font-semibold text-white hover:bg-green-400 transition-all duration-300 border-none outline-none bg-green-500 py-2 capitalize">
                Masuk
              </button>
            </form>
            
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection
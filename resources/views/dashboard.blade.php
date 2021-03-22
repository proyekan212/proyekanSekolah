@extends('layout.master')

@section('content')

@if($user->user_detail->role->name_role == 'siswa')
  <div class="w-full  flex flex-col mb-4  bg-white rounded-xl p-4">
    <span class="text-sm mb-2 text-blue-400">
    Tahun Ajaran 2020/2021
    </span>
    <span class="text-gray-800 text-sm font-semibold">
      Kelas XI IPA
    </span>

    
  </div>
  <div class="grid grid-cols-12 gap-6">
    <div class="col-span-full md:col-span-3">
      <div class="w-full bg-white p-4 flex items-center  rounded-xl shadow-md">
        <span style="font-size:50px;" class="material-icons pr-4 text-red-400">
          assignment_ind
        </span>
        <div class="grid md:flex md:flex-col">
          <span class="text-sm capitalize font-semibold text-red-400">
            Kamu belum absen
          </span>
          <form action="">
            <button class=" text-xs py-2  md:py-1 md:text-sm w-full  bg-red-400 rounded-lg capitalize font-semibold  text-white">
              absen 
            </button>
          </form>
        </div>
      </div>

      <div class="mt-4 w-full rounded-xl shadow-md bg-white p-4">
        calendar
      </div>
    </div>
    <div id="tugas-terbaru" class="col-span-full md:col-span-9">
      <div class="bg-white shadow-md p-4 rounded-xl">
        jadwal pelajaran
      </div> 
    </div>
  </div>
<div class="w-full mt-8">
  <h1 class="text-lg  text-gray-800 font-bold ">
    Mata Pelajaran
  </h1>
  <div class="mt-4  grid  lg:grid-cols-4   gap-6">
    @foreach($daftarKelas->kelas->jadwal_pelajaran as $row)
    <div class="w-full mt-4 hover:mt-0 hover:shadow-md mapel transition-all duration-300 cursor-pointer hover:mt-0 p-4 bg-white rounded-lg flex flex-col">
      <h1 class="capitalize text-gray-700 mb-2 text-base">
        Kelas {{$row->master_mapel->nama_mapel}}
      </h1>
      
      <span class="text-gray text-xs">
      {{$row->user->user_detail->name}}
      </span>
      <form action="{{ url('kelas_mapel') }}" method="post" class="mt-2">
      @csrf
        <input type="text"  hidden name="kelas_mapel_id" value="{{$row->id}}">
        <button type="submit" class="py-1 rounded-lg w-full bg-blue-400 text-white">
          Masuk
        </button>
      </form>
     
    </div>
    @endforeach
    
     
    </div>
    
  </div>
  
</div>
  
  
@else
@if(Auth::user()->id != '1')
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
          
        </div>      </div>
    </div>
  </div>
</div>
@else
    @endif
<div id="kelas" class="md:p-6 w-full lg:p-8 p-4">
@if(Auth::user()->id != '1')

    <h2 class="lg:text-lg text-base font-semibold text-blue-600">
    Tahun Ajaran 2020/2021 - Semester Genap
    </h2>
    @else
    @endif
    <div class="grid md:gap-8 lg:gap-6 gap-4 md:grid-cols-2 mt-4 md:mt-6 lg:mt-8 lg:grid-cols-4">
      @foreach($kelas as $row)
       @if($row->jadwal_pelajaran->count() == 0) 
            <div id="card" class="w-full bg-blue-50 md:p-6 p-4  rounded-md shadow-md">
              <div id="card-content" class="flex flex-col items-center">
                  <h3 class="capitalize text-blue-500 mb-1 md:mb-2 md:text-base text-sm">
                  {{$row->master_kelas->kode_kelas->kode}} {{$row->master_kelas->kelas}}
                  </h3>
                  <p class="capitalize text-gray-400 mb-2 md:mb-4 lg:mb-6 ">
                  tahun akademik {{$row->tahun_akademik->tahun_akademik}}
                  </p>
                  <div class="mb-2 md:mb-4 lg:mb-6">
                    <table class="w-full text-gray-600">
                      <tr>
                        <td class="px-2 border-r-2 border-gray-500">Siswa: {{$row->daftar_kelas->count()}} </td>
                        <td class="px-2 border-r-2 border-gray-500">Max KD: 7</td>
                        <td class="px-2 "> KKM: 75  </td>
                      </tr>
                    </table>
                  </div>

                  
                
            <form class="w-full" method="post" action="{{ url ('kelas')}}">
              @csrf
              <input type="text" hidden name="kelas_id" value="{{$row->id}}">
              <button type="submit" class="w-full md:mt-4 rounded-xl font-semibold text-white hover:bg-green-400 transition-all duration-300 border-none outline-none bg-green-500 py-2 capitalize">
                Buat Kelas
              </button>
            </form>
            @else
            @foreach($row->jadwal_pelajaran as $jadwal) 
            <div id="card" class="w-full bg-blue-50 md:p-6 p-4  rounded-md shadow-md">
              <div id="card-content" class="flex flex-col items-center">
                  <h3 class="capitalize text-blue-500 mb-1 md:mb-2 md:text-base text-sm">
                  {{$row->master_kelas->kode_kelas->kode}} {{$row->master_kelas->kelas}}
                  </h3>
                  <p class="capitalize text-gray-400 mb-2 md:mb-4 lg:mb-6 ">
                  tahun akademik {{$row->tahun_akademik->tahun_akademik}}
                  </p>
                  <div class="mb-2 md:mb-4 lg:mb-6">
                    <table class="w-full text-gray-600">
                      <tr>
                        <td class="px-2 border-r-2 border-gray-500">Siswa: {{$row->daftar_kelas->count()}} </td>
                        <td class="px-2 border-r-2 border-gray-500">Max KD: 7</td>
                        <td class="px-2 "> KKM: 75  </td>
                      </tr>
                    </table>
                  </div>

                  
                
            <form class="w-full" method="get" action="{{ url ('kelas')}}">
              @csrf
              <input type="text" hidden name="kelas_id" value="{{$row->id}}">
              <input type="text" hidden name="kelas_mapel" value="{{$jadwal->id}}">
              <button type="submit" class="w-full md:mt-4 rounded-xl font-semibold text-white hover:bg-blue-400 transition-all duration-300 border-none outline-none bg-blue-500 py-2 capitalize">
                masuk
              </button>
            </form> 
            @endforeach
            @endif
            
        </div>
        </div>
      @endforeach
    </div>
</div>

<style lang="css">
  .mapel {
    transition: all;
    margin-top: 8px;
    transition-duration: .3s;
  }

  .mapel:hover {
    transition:all;
    margin-top: 0px;
    transition-duration: .3s;
  }
</style>
@endif


@endsection
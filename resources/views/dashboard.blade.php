@extends('layout.master')

@section('content')

@if($user->user_detail->role->name_role == 'siswa')
 <div>
 <div class="w-full  flex flex-col mb-4  bg-white rounded-xl p-4">
    <span class="text-sm mb-2 text-blue-400">
    Tahun Ajaran {{$setting_semester->tahun_akademik->tahun_akademik}}
    </span>
    <span class="text-gray-800 text-sm font-semibold">
      
    </span>

    
  </div>
  <div class="grid grid-cols-12 gap-6">
    <div class=" col-span-4">
      <div class="w-full bg-white p-4 flex items-center  rounded-xl shadow-md">
        @if($user_detail->photo == null)
       <div class="bg-gray-400 rounded-full w-16 h-16">
          </div>
        @else
        <img src="{{ asset('Album-Foto-siswa/'.$user_detail->photo) }}" class="bg-gray-400 rounded-full w-16 h-16" style=";max-height: 100px;max-width: 100px;">
        @endif
        <div class="grid md:flex md:flex-col">
          <span class="text-sm capitalize font-semibold text-red-400">
            Nama  :  {{$user->user_detail->name}}
          </span>
          <form action="{{ url('/edit_profile', $user_detail->user_id)}}">
            <button class=" text-xs py-2  md:py-1 md:text-sm w-full  bg-red-400 rounded-lg capitalize font-semibold  text-white">
               Edit Profile 
            </button>
          </form>
        </div>
      </div>

      <div id="calendar">
      </div>

    </div>
    <div id="tugas-terbaru" class="col-span-8">
      <div class="bg-white shadow-md p-4 rounded-xl">
        jadwal pelajaran
      </div> 
    </div>

   
  </div>
<div class="w-full mt-8">
  <h1 class="text-lg mb-6  text-gray-800 font-bold ">
    Mata Pelajaran
  </h1>
 
    @if($daftarKelas != null)
    <div class="mt-4  grid  lg:grid-cols-3  gap-6">
    @foreach($daftarKelas->kelas->jadwal_pelajaran as $row)
    
    <div class="w-full mt-4 hover:mt-0 hover:shadow-md mapel transition-all duration-300 cursor-pointer hover:mt-0 p-4 bg-white rounded-lg flex flex-col">
      <h1 class="capitalize text-gray-700 mb-2 text-base">
        Kelas {{$row->master_mapel->nama_mapel}}
      </h1>
      
      <span class="text-gray text-xs">
      {{$user->user_detail->name}}
      </span>
      <form action="{{ url('kelas_mapel') }}" method="post" class="mt-2">
      @csrf
        <input type="text"  hidden name="kelas_mapel_id" value="{{$row->id}}">
        
        @if($daftarKelas->block_from_mapel($row->id) == null) 
        <button type="submit" class="py-1 rounded-lg w-full bg-blue-400 text-white">
          Masuk
        </button>
        @else
        <button type="button" disabled class="py-1 rounded-lg w-full bg-red-400 text-white">
          Terbanned
        </button>

        @endif

      </form>
     
    
    </div>
    @endforeach
    </div>
    @else
    <h1 class="text-gray-600 text-sm font-semibold">
      Belum ada mata pelajaran
     </h1>

    @endif
     
   
    
  </div>
  
</div>
 </div>  
@else
  @if(Auth::user()->id != '1')
  <!-- -->
  <div class="grid bg-gray-100 rounded-xl grid-cols-1 md:p-6 p-4 md:grid-cols-2 md:gap-x-4 gap-y-4">
    <div class="md:col-span-1">
      <div class="w-full h-full relative flex flex-col md:justify-end">
        <div class="flex items-center ">
           @if($user_detail->photo == null)
          <div class="bg-gray-400 rounded-full w-16 h-16">
          </div>
          @else
          <img src="{{ asset('Album-Foto-Guru/'.$user_detail->photo) }}" class="bg-gray-400 rounded-full w-16 h-16" style=";max-height: 100px;max-width: 100px;"> 
        @endif
          <div class="md:py-6 md:ml-4">
            <p class="md:text-xl font-semibold text-sm capitalize">
              {{$user_detail->name}}
            </p>
            <a href="{{ url('/edit_profile', $user_detail->user_id)}}" class="flex items-center md:py-3 py-1 md:px-4 px-3 bg-blue-500 text-white rounded-lg">
              
                <i data-feather="eye" class="btn-icon-prepend"></i> <span class="ml-2 ">
                edit profile
                </span> 

            </a> 
          </div>
        </div>
      </div>
    </div>
    <div class="md:col-span-1  mt-4 md:mt-0">
      <h4 class="text-center font-bold md:text-xl ">
        Create Kelas
      </h4>
      <form action="{{ url('dashboard')}}" method="post">
      <div class="grid md:gap-x-6 gap-y-4 grid-cols-1 grid">
   
      <div class="flex flex-col">
        
        @csrf
        <div class="py-2 flex flex-col">
            <Label>Kelas</Label>
            <select name="kelas" onchange="getKelas(event)" id="kelas">
              <option value="" selected disabled> -- </option>
              @foreach($kelas as $row)
                <option value="{{$row->id}}">
                  {{$row->master_kelas->kode_kelas->kode}} {{$row->master_kelas->jurusan->jurusan}} {{$row->master_kelas->kelas}}
                </option>
              @endforeach
            </select>
          </div>
          <div class="py-2 flex flex-col">
            <Label>Jurusan</Label>
            <select  name="jurusan" onchange="getMapels(event)" class="uppercase" id="">
              <option selected disabled> -- </option>
              @foreach($jurusan as $row)
                <option value="{{$row->id}}" class="uppercase">
                  {{$row->jurusan}}
                </option>
              @endforeach
            </select>
          </div>
         
          <div class="py-2 flex flex-col">
            <Label>Mata Pelajaran</Label>
            <select name="mapel" class="capitalize" id="mapel">
              <option selected disabled value="">
                --
              </option>
              <!-- <option value="">
                Matematika
              </option> -->
            </select>
          </div>
        
       
      </div>
      <div class="">
        Kompetensi dasar
        <div style="height:200px;"  class="overflow-x-scroll bg-white p-4 w-full border-gray-200 border-2">
          <ul>
          @foreach($kompetensi as $kompetensi) 
            <li class=" mb-3 font-bold capitalize text-base">
              {{$kompetensi->name}}
              
              <ul class="mt-1">
                @foreach($kompetensi->kompetensi_dasar as $kd)
                  <li class="font-normal flex items-center text-sm mb-2">
                    <input type="checkbox" value="{{$kd->id}}" name="kompetensi_dasar[]">
                    <span class="pl-2">
                    {{$kd->nama_kompetensi_dasar}}
                    </span>
                  </li>
                @endforeach
              
              </ul>

            </li>
          @endforeach
          </ul>
        </div>
      </div>


      <div class="md:mt-4 mt-2 flex justify-end">
            <button class="bg-blue-500 rounded-xl text-white md:py-2 md:px-6 py-1 md:px-4">
              Create
            </button>
          </div>

      </div>
      </form>
    </div> 
  </div>
  @else
  @endif
<div id="kelas" class="md:p-6 w-full lg:p-8 p-4">
@if(Auth::user()->id != '1')

    <h2 class="lg:text-lg text-base capitalize font-semibold text-blue-600">
    Tahun Ajaran {{$setting_semester->tahun_akademik->tahun_akademik}} - semester {{$setting_semester->semester->nama_semester}}
    </h2>
    <div class="grid md:gap-8 lg:gap-6 gap-4 md:grid-cols-2 mt-4 md:mt-6 lg:mt-8 lg:grid-cols-3">
      @foreach($kelas as $row)
       
            <div class="card w-full md:p-6 p-4 transition-all duration-300 text-gray-600 bg-gray-200 rounded-xl hover:shadow-xl">
              <div class="header uppercase text-center font-bold">
                {{$row->master_kelas->kode_kelas->kode}} {{$row->master_kelas->jurusan->jurusan}} {{$row->master_kelas->kelas}} {{$row->tahun_akademik_id}}
              </div>
              <form action="{{ url('kelas')}}" method="post">
                @csrf

                <input type="hidden" name="kelas_id" value="{{$row->id}}">
              <div class="body md:mt-4 mt-3">
                <div>
                  <table class="text-xs text-xs-500 font-semibold">
                    <tr>
                      <td>
                        Jumlah Siswa
                      </td>
                      <td>
                        :
                      </td>
                      <td>
                        {{$row->daftar_kelas->count()}}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Jumlah Kelas Mapel
                      </td>
                      <td>
                        :
                      </td>
                      <td>
                        {{$row->jadwal_pelajaran->count()}}
                      </td>
                    </tr>
                  </table>
                </div>
                <select class="mt-2 font-semibold md:mt-3 rounded-lg w-full px-2 py-2 " name="kelas_mapel" id="">
                  @if($row->jadwal_pelajaran->count() == 0)
                    <option selected value="" disabled>
                      --
                    </option>
                  @else
                  @foreach($row->jadwal_pelajaran as $mapel)
                    <option value="{{$mapel->id}}">
                      {{$mapel->master_mapel->nama_mapel}}
                    </option>
                  @endforeach

                  @endif
                </select>
                @if($row->jadwal_pelajaran->count() == 0)
                  <button disabled class="mt-4 font-bold w-full px-4 py-2 rounded-lg bg-red-400 text-white">
                    Belum Membuat Kelas
                  </button>
                @else
                  <button class="mt-4 font-bold w-full px-4 py-2 rounded-lg bg-blue-400 text-white">
                    Masuk
                  </button>
                @endif
              </div>
              </form>
            </div>
           
      @endforeach
    </div>
    @else
    @endif
    
</div>
<script>
$('#calendar').pignoseCalendar();


var jurusan_id = null;
var kelas_id = null;

function fetchData() {
  if(kelas_id !== null && jurusan_id !== null) {
    axios.get('/dashboard/get_mapels', {
    params: {
      'kelas_id': kelas_id,
      'jurusan_id': event.target.value,
    }
  })
  .then((resp) => {
    console.log(resp);
    const selectMapels = document.getElementById('mapel');
    selectMapels.innerHTML = '';
    var defaultOptionValue = document.createElement('option');
    defaultOptionValue.disabled = true
    defaultOptionValue.selected = true
    defaultOptionValue.innerHTML = "--"
    

    if(resp.data.data.length > 0) {
        resp.data.data.forEach(element => {
          const id = element.id;
          const kelas_name = `${element.nama_mapel}`;
          var opt = document.createElement('option');
          opt.value = id;
          opt.innerHTML = kelas_name
          selectMapels.appendChild(opt);
        });
      }
      else {
        selectMapels.appendChild(defaultOptionValue);
      }
    // console.log(resp)
  })
  .catch((err) => {
    console.log(err);
  })
  }
}

function getMapels(event) {
 jurusan_id = event.target.value

  fetchData()
}

function getKelas(event) {
    kelas_id = event.target.value;
    console.log(event.target.value);
    
}
</script>
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
  select {
    border-radius: .5em;
    padding: 0px .5em;
  }
</style>
@endif


@endsection
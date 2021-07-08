<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>

  <a href="">
           
  </a>
  <div class="navbar-content">
    <ul class="navbar-nav">
     
      <li class="nav-item dropdown flex items-center nav-profile">
          @if(Auth::user()->user_detail->role_id == 2)
             <div class="relative mr-4">
                  <a onclick="showNotifications()" class="cursor-pointer relative text-gray-600 focus:text-gray-800 hover:text-gray-800">
                    <span class="material-icons">
                      notifications
                    </span>
                
                   </a>
                   <div class="absolute -top-3 -right-5 bg-blue-400 text-white h-7 w-7 rounded-full flex items-center justify-center">
                     <span class="font-bold">
                      {{--  @if($notifications->count() > 100)
                        99+
                      @else 
                        {{$notifications->count()}}
                      @endif --}}
                     </span>
                  </div>
                  <div id="notif" style="display: none;width:300px; top: 35px; left: -2px; height: 300px;" class="absolute shadow-md rounded-xl bg-white  ">
                    <div style="height:285px" class="w-full overflow-y-scroll overflow-x-hidden">
                      <ul class="px-2 pt-4">
                        
                      {{--   @if($notifications != null)
                             @foreach($notifications as $notif) 
                            @if($notif->read == 1)
                              <li class="p-2 rounded-lg bg-gray-100 mb-2 "> 
                                {{$notif->kelas_mapel->kelas}}
                              </li>

                            @else 
                              <li class="p-2 text-white mb-2 break-all overflow-x-hidden  rounded-lg bg-green-400 "> 
                                 <div class=" mb-2">
                                  <div class="flex-col flex">
                                    <span class="text-sm mb-1">
                                      {{$notif->siswa->user_detail->name}}
                                    </span>
                                    <span class="text-xs font-semibold mb-1">
                                      NISN: {{$notif->siswa->user_detail->nisn_or_nip}}
                                    </span>
                                    <span class="text-xs  ">
                                     Kelas: <span class="font-bold uppercase">
                                        {{$notif->kelas_mapel->kelas->master_kelas->kode_kelas->kode}}  {{$notif->kelas_mapel->kelas->master_kelas->jurusan->jurusan}}
                                      {{$notif->kelas_mapel->kelas->master_kelas->kelas}}
                                     </span>
                                    </span>
                                  </div>

                                  <div class="mb-2 font-semibold capitalize">
                                    {{$notif->descprition}} {{$notif->kelas_mapel->master_mapel->nama_mapel}}
                                  </div>

                                 </div>
                              </li>
                            @endif
                          @endforeach
                        @endif --}}
                    
                      </ul>

                     
                    </div>
                  </div>
        </div>
          @elseif(Auth::user()->user_detail->role_id == 3)

          @endif
          <a href="{{ url('/edit_password' , Auth::user()->id)}}" class="p-2 flex items-center">
          <i data-feather="user"></i><span>change password</span>
        </a>
        <a href="{{ url('/logout')}}" class="p-2 flex items-center">
          <span class="p-0 pr-1 pt-1 text-muted">LOGOUT</span>
          <i class="fas fa-sign-out-alt fa-2x"></i>
        </a>
      {{--   <a class="nav-link flex items-center dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
       
      </a> --}}
      </li>
      </a>
      <div class="dropdown-menu" aria-labelledby="profileDropdown">
        <div class="dropdown-header d-flex flex-column align-items-center">
          <div class="figure mb-3">
            <img src="{{ url('https://via.placeholder.com/80x80') }}" alt="">
          </div>
          <div class="info text-center">
            <p class="name font-weight-bold mb-0">Amiah Burton</p>
            <p class="email text-muted mb-3">amiahburton@gmail.com</p>
          </div>
        </div>

        <div class="dropdown-body">
          <ul class="profile-nav p-0 pt-3">
            <li class="nav-item">
              <a href="{{ url('/profile') }}" class="nav-link">
                <i data-feather="user"></i>
                <span>Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="/logout" class="nav-link">
                <i data-feather="log-out"></i>
                <span>Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </li>
  </ul>
</div>

</nav>

<script type="text/javascript">
  const notifElement = document.querySelector('#notif');
  var show_notif = false;
  function showNotifications() {
    show_notif = !show_notif

    if(show_notif) {
      notifElement.style.display = 'block'
    }
    else {
      notifElement.style.display = 'none'
    }
  }
</script>
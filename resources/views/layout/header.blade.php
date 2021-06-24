<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <ul class="navbar-nav">
      <li class="nav-item dropdown nav-profile">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <a href="{{ url('/edit_password' , Auth::user()->id)}}" class="p-2 flex items-center">
          <i data-feather="user"></i><span>change password</span>
          <i class="fas fa-sign-out-alt fa-2x"></i>
        </a>
        <a href="{{ url('/logout')}}" class="p-2 flex items-center">
          <span class="p-0 pr-1 pt-1 text-muted">LOGOUT</span>
          <i class="fas fa-sign-out-alt fa-2x"></i>
        </a>
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
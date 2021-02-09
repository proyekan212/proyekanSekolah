<nav class="sidebar">
  <div class="sidebar-header">
    <a href="/dashboard" class="sidebar-brand">
      Kelas<span>KITA</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      @foreach (session('menus2') as $menu)
        @if (count($menu['sub_menu']) > 0)
          <li class="nav-item nav-category">{{ $menu['parent_name'] }}</li>
            @foreach ($menu['sub_menu'] as $sub)
            <li class="nav-item {{ active_class(['/matapelajaran']) }}">
              <a href="{{ url($sub['sub_code']) }}" class="nav-link">
                <i class="link-icon" data-feather="{{ $sub['sub_icon'] }}"></i>
                <span class="link-title">{{ $sub['sub_name'] }}</span>
              </a>
            </li>
            @endforeach
        @endif    
      @endforeach
    </ul>
  </div>
</nav>
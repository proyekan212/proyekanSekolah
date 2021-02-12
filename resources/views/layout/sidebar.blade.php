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
      {{-- @foreach (session('menus') as $menu) --}}
        


      @foreach ($menu as $menu)
      <?php 
        $parent_menu =  '';
        $sub_menu = '';
      ?>
        {{-- @if (count($menu) > 0)
          <li class="nav-item nav-category">{{ $menu['parent_name'] }}</li>
          @if($menu->status==1 )
            @foreach ($menu as $sub)
            <li class="nav-item {{ active_class(['/matapelajaran']) }}">
              <a href="{{ url($sub['code']) }}" class="nav-link">
                <i class="link-icon" data-feather="{{ $sub['icon'] }}"></i>
                <span class="link-title">{{ $sub['name'] }}</span>
              </a>
            </li>
            @endforeach
            @endif
        @endif     --}}
          @if ($menu->status == 2 ) 
            
                <?php 
                  $parent_menu = $menu->parent_code;
                ?>
                <li class="nav-item nav-category">
                 {{$menu->name}}
                </li>
          @elseif($menu->status == 1)

                <li class="nav-item {{ active_class(['/matapelajaran']) }}">
                  <a href="{{ url($menu['code']) }}" class="nav-link">
                    <i class="link-icon" data-feather="{{ $menu['icon'] }}"></i>
                    <span class="link-title">{{ $menu['name'] }}</span>
                  </a>
                </li>
        
          @endif
      @endforeach
    </ul>
  </div>
</nav>
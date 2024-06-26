      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="{{url('/dashboard')}}"><img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{ asset('admin/assets/images/faces/face1.jpg')}}" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">{{ Auth::user()->name }}</span>
                <span class="font-weight-normal">{{ Auth::user()->email }}</span>
              </div>
              <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard/sewa')}}">
              <i class="mdi mdi-rename-box menu-icon"></i>
              <span class="menu-title">Sewa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard/mobil')}}">
              <i class="mdi mdi-car menu-icon"></i>
              <span class="menu-title">Mobil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard/merk')}}">
              <i class="mdi mdi-library menu-icon"></i>
              <span class="menu-title">Merk</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard/perawatan')}}">
              <i class="mdi mdi-account-search menu-icon"></i>
              <span class="menu-title">Perawatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard/jenis_perawatan')}}">
              <i class="mdi mdi-format-line-weight menu-icon"></i>
              <span class="menu-title">Jenis Perawatan</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
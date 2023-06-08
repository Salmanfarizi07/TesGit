<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <div id="sideNavigation" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Homepage</a>
            <a href="#">Admin</a>
            <a href="#">Simpanan</a>
            <a href="#">Pembayaran</a>
            <a href="#">Peminjaman</a>
            <a href="#">Pengajuan</a>
            <a href="#">Surat</a>
      </div>
          <nav class="topnav">
            <a href="#" onclick="openNav()">
              <svg width="30" height="30" id="icoOpen">
                  <path d="M0,5 25,5" stroke="#fff" stroke-width="3"/>
                  <path d="M0,14 25,14" stroke="#fff" stroke-width="3"/>
                  <path d="M0,23 25,23" stroke="#fff" stroke-width="3"/>
              </svg>
            </a>
          </nav>
          
          <div id="main">
          </div>
          <script>
            function openNav() {
                document.getElementById("sideNavigation").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }
            function closeNav() {
                document.getElementById("sideNavigation").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
          </script>

      <a class="navbar-brand" href="#">Koperasi Mahasiswa</a>
      <ul class="nav col-12 col-lg-auto ms-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Information</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Contact us</a></li>
      </ul>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('actionlogout') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('actionlogin') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('actionregister') }}" class="btn btn-primary">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>
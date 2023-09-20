<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
      <div class="sidebar-brand-icon">
        {{-- <i class="fas fa-warehouse"></i> --}}
        <i class="fas fa-store-alt"></i>
      </div>
      <div class="sidebar-brand-text mx-3">S<span class="text-lowercase">i</span>S<span class="text-lowercase">apras</span></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
      <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Tentang Barang
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-box"></i>
          <span>Barang</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Data Barang:</h6>
              <a class="collapse-item" href="/daftar-barang">Daftar Barang</a>
              {{-- <a class="collapse-item" href="/kategori-barang">Kategori</a> --}}
              <a class="collapse-item" href="/nama-peminjam">Nama Peminjam</a>
          </div>
      </div>
  </li>
  
  <!-- Nav Item - History -->
  <li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseBarang" aria-expanded="true"
        aria-controls="collapseBarang">
        <i class="fas fa-fw fa-history"></i>
        <span>History</span>
    </a>
    <div id="collapseBarang" class="collapse" aria-labelledby="headingBarang"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/history"><i class="fas fa-sign-in-alt"></i>  Riwayat peminjam</a>
        </div>
    </div>
</li>  


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  {{-- <div class="sidebar-heading">
      Info
  </div> --}}

  <!-- Nav Item - Accounts -->
  <li class="nav-item">
      {{-- <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-user"></i>
          <span>Akun</span>
      </a> --}}
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="#">Pegawai</a>
          </div>
      </div>
  </li>


 

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
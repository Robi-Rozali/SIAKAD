  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/prodi">
        <div class="sidebar-brand-icon">
          <img src="../img/stmik.png" class="d-inline" style="width: 50px" alt="logo">
        </div>
        <div class="sidebar-brand-text text-left tulisan-logo">Sistem Informasi Akademik</div>
      </a>
    

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/prodi">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Akademik
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link" href="\kurikulum">
            <i class="fas fa-book"></i>
            <span>Kurikulum</span></a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="\inputjadwal">
          <i class="fas fa-calendar-alt"></i>
          <span>Jadwal Kuliah</span></a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="\khsadm">
            <i class="fas fa-sticky-note"></i>
            <span>KHS</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\perwalianadm">
            <i class="fas fa-sticky-note"></i>
            <span>Disposisi (KRS)</span></a>
        </li> --}}
        
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Disposisi</span>
        </a>
        
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Perwalian :</h6>
            <a class="collapse-item" href="\perwalianadm">Perwalian</a>
            <a class="collapse-item" href="\pilihkelasprodi">Pilih Kelas</a>
            <a class="collapse-item" href="\khsadm">Kartu Hasil Studi</a>
          </div>
        </div> 
      </li>
        <li class="nav-item">
          <a class="nav-link" href="\nilai">
            <i class="fas fa-calculator"></i>
            <span>Nilai</span></a>
        </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Charts -->
      {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Pengguna Sistem</span></a>
      </li> --}}
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
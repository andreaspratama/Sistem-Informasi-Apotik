<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <i class="fas fa-store-alt"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Apotikmu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (auth()->user()->role === 'admin')
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboardAdmin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    @endif
    @if (auth()->user()->role === 'kasir')
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboardKasir')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if (auth()->user()->role === 'admin')
      <li class="nav-item">
        <a class="nav-link" href="{{route('kategori.index')}}">
          <i class="fas fa-folder-open"></i>
          <span>Kategori</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('satuan.index')}}">
          <i class="fas fa-folder-open"></i>
          <span>Satuan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('suplaier.index')}}">
          <i class="fas fa-truck"></i>
          <span>Suplaier</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-capsules"></i>
          <span>Data Obat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('obat.index')}}">Obat</a>
            <a class="collapse-item" href="{{route('obatmasuk.index')}}">Obat Masuk</a>
            <a class="collapse-item" href="{{route('cetakForm')}}">Cetak Obat Masuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#penjualan" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-dollar-sign"></i>
          <span>Data Penjualan</span>
        </a>
        <div id="penjualan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('penjAdmin.index')}}">Penjualan</a>
            <a class="collapse-item" href="{{route('cetakFormPenjualan')}}">Cetak Penjualan</a>
          </div>
        </div>
      </li>
    @endif

    @if (auth()->user()->role === 'kasir')
      <li class="nav-item">
        <a class="nav-link" href="{{route('penjualan.index')}}">
          <i class="fas fa-dollar-sign"></i>
          <span>Penjualan</span></a>
      </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
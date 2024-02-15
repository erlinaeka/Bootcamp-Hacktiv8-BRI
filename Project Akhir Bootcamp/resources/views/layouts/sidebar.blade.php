<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand"><a href="/" class="text-primary text-capitalize">E-COMMERCE</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">

            <a href="/">EC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Admin</li>
            <li class={{ Request::is('home') ? 'active' : '' }}>
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-home"></i><span>Dashboard</span>
                </a>
            </li>
            </li>
            <li class="menu-header">Manajemen Produk</li>
            <li class={{ Request::routeIs('index-kategori') ? 'active' : '' }}><a class="nav-link" href="{{ route('index-kategori') }}"><i class="fas fa-th-large"></i> <span>Kategori</span></a></li>
            <li class={{ Request::routeIs('index-produk')||Request::routeIs('tambah-produk')||Request::routeIs('edit-produk') ? 'active' : '' }}><a class="nav-link" href="{{ route('index-produk') }}"><i class="fas fa-th-large"></i> <span>Produk</span></a></li>
            <li class="{{ Request::routeIs('index-order-item')||Request::routeIs('tambah-order-item') ||Request::routeIs('edit-order-item') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index-order-item') }}"><i class="fas fa-archive"></i> <span>Keranjang Pesanan</span></a></li>
            <li class={{ Request::routeIs('index-order') ? 'active' : '' }}><a class="nav-link" href="{{ route('index-order') }}"><i class="fas fa-archive"></i> <span>Laporan Pesanan</span></a></li>
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Laporan Pesanan</a></li>
                </ul>
            </li> --}}
            </li>

    </aside>
</div>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''  }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Kelola Data</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/barang') ? 'active' : ''  }}" href="/dashboard/barang">
                    <span data-feather="package"></span>
                    Data Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/kategori') ? 'active' : ''  }}" href="/dashboard/kategori">
                    <span data-feather="grid"></span>
                    Data Kategori Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/gambar') ? 'active' : ''  }}" href="/dashboard/gambar">
                    <span data-feather="image"></span>
                    Data Gambar Kategori
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/gudang') ? 'active' : ''  }}" href="/dashboard/gudang">
                    <span data-feather="database"></span>
                    Data Gudang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/supplier') ? 'active' : ''  }}" href="/dashboard/supplier">
                    <span data-feather="users"></span>
                    Supplier
                </a>
            </li>
        </ul>
    </div>
</nav>

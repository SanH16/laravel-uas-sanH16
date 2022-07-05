<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        @if(Auth::user()->jabatan == null)

        @elseif(Auth::user()->jabatan == 'admin')
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/profile') }}">
                    <span data-feather="users"></span>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/user') }}">
                    <span data-feather="users"></span>
                    User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pelanggan') }}">
                    <span data-feather="users"></span>
                    Pelanggan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/supplier') }}">
                    <span data-feather="users"></span>
                    Supplier
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/barang') }}">
                    <span data-feather="shopping-cart"></span>
                    Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/gudang') }}">
                    <span data-feather="layers"></span>
                    Gudang
                </a>
            </li>
            <li class="nav-item" hidden>
                <a class="nav-link" href="{{ url('/retur') }}">
                    <span data-feather="layers"></span>
                    Retur
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted" hidden>
            <span hidden>Reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report" hidden>
                <span data-feather="plus-circle" hidden></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2" hidden>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_penjualan') }}">
                    <span data-feather="bar-chart-2"></span>
                    Penjualan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_pembelian') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembelian
                </a>
            </li>
            <li class="nav-item" hidden>
                <a class="nav-link" href="{{ url('/laporan_pembayaran_hutang') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembayaran Hutang (under development)
                </a>
            </li>
            <li class="nav-item" hidden>
                <a class="nav-link" href="{{ url('/laporan_pembayaran_piutang') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembayaran Piutang (under development)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_barang_terlaris') }}">
                    <span data-feather="bar-chart-2"></span>
                    Barang Terlaris
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_pembeli_terbanyak') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembeli Terbanyak
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
            <span>Pembelian</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="bar-chart-2" hidden></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pembelian') }}">
                    <span data-feather="file"></span>
                    Pembelian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/lihat_pembelian') }}?pembayaran=cash">
                    <span data-feather="file-text"></span>
                    Lihat Pembelian Cash
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/lihat_pembelian') }}?pembayaran=kredit">
                    <span data-feather="file-text"></span>
                    Lihat Pembelian Kredit
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/hutang') }}" hidden>
                    <span data-feather="file-text"></span>
                    Lihat Hutang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/piutang') }}" hidden>
                    <span data-feather="file-text"></span>
                    Lihat Piutang
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
            <span>Penjualan</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="bar-chart-2" hidden></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/penjualan') }}">
                    <span data-feather="file"></span>
                    Penjualan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/lihat_penjualan') }}?pembayaran=cash">
                    <span data-feather="file-text"></span>
                    Lihat Penjualan Cash
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/lihat_penjualan') }}?pembayaran=kredit">
                    <span data-feather="file-text"></span>
                    Lihat Penjualan Kredit
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/hutang') }}" hidden>
                    <span data-feather="file-text"></span>
                    Lihat Hutang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/piutang') }}" hidden>
                    <span data-feather="file-text"></span>
                    Lihat Piutang
                </a>
            </li>
        </ul>
        
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
            <span>Retur</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="bar-chart-2" hidden></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/retur_pembelian') }}">
                    <span data-feather="file"></span>
                    Pembelian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/retur_penjualan') }}">
                    <span data-feather="file"></span>
                    Penjualan
                </a>
            </li>
        </ul>
        @else
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/user') }}">
                    <span data-feather="users"></span>
                    User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pelanggan') }}">
                    <span data-feather="users"></span>
                    Pelanggan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/supplier') }}">
                    <span data-feather="users"></span>
                    Supplier
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/barang') }}">
                    <span data-feather="shopping-cart"></span>
                    Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/beli') }}">
                    <span data-feather="file"></span>
                    Pembelian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/jual') }}">
                    <span data-feather="file"></span>
                    Penjualan
                </a>
            </li>
            <li class="nav-item" hidden>
                <a class="nav-link" href="{{ url('/retur') }}">
                    <span data-feather="layers"></span>
                    Retur
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
            <span>Reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_penjualan') }}">
                    <span data-feather="bar-chart-2"></span>
                    Penjualan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_pembelian') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembelian
                </a>
            </li>
            <li class="nav-item" hidden>
                <a class="nav-link" href="{{ url('/laporan_pembayaran_hutang') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembayaran Hutang (under development)
                </a>
            </li>
            <li class="nav-item" hidden>
                <a class="nav-link" href="{{ url('/laporan_pembayaran_piutang') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembayaran Piutang (under development)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_barang_terlaris') }}">
                    <span data-feather="bar-chart-2"></span>
                    Barang Terlaris
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan_pembeli_terbanyak') }}">
                    <span data-feather="bar-chart-2"></span>
                    Pembeli Terbanyak
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
            <span>Lihat</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="bar-chart-2"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pemesanan') }}">
                    <span data-feather="file-text"></span>
                    Lihat Pembelian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/penjualan') }}">
                    <span data-feather="file-text"></span>
                    Lihat Penjualan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/hutang') }}">
                    <span data-feather="file-text"></span>
                    Lihat Hutang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/piutang') }}">
                    <span data-feather="file-text"></span>
                    Lihat Piutang
                </a>
            </li>
        </ul>
        @endif
    </div>
</nav>
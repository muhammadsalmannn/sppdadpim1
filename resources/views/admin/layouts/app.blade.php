    @include('admin.partials.header')

    <body class="hold-transition sidebar-mini bg-lime">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/home" class="nav-link">Home</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <!-- Messages Dropdown Menu -->
                    <!-- Nav Item - User Information -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                            role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                            <i class="fas fa-users"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated animated--grow-in"
                            aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="post">
                                @method('post')
                                @csrf
                                <button class="btn btn-dark" type="submit">
                                    <i class="fas fa-sign-out-alt fa-fw text-gray-400"></i> Logout</button>
                            </form>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="/home" class="brand-link">
                    <img src="/dist/img/logo.png" alt="Pemprov Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">SPPD ADPIM</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info">
                            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/home" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pegawai" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Pegawai
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/perjalanan" class="nav-link">
                                    <i class="nav-icon fas fa-plane"></i>
                                    <p>
                                        Perjalanan Dinas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/surat" class="nav-link">
                                    <i class="nav-icon far fa-paper-plane"></i>
                                    <p>
                                        Surat Perjalanan Dinas
                                    </p>
                                </a>
                            </li>

                            @can('admin')
                                <li class="nav-item">
                                    <a href="/kendaraan" class="nav-link">
                                        <i class="nav-icon fas fa-motorcycle"></i>
                                        <p>
                                            Kendaraan
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pangkat" class="nav-link">
                                        <i class="nav-icon fas fa-user-graduate"></i>
                                        <p>
                                            Pangkat
                                        </p>
                                    </a>
                                <li class="nav-item">
                                    <a href="/jabatan" class="nav-link">
                                        <i class="nav-icon fas fa-handshake"></i>
                                        <p>
                                            Jabatan
                                        </p>
                                    </a>
                                </li>
                            @endcan

                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Dashboard</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="container container-fluid">
                        @yield('container')
                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="
                        main-footer">
                <div class="float-right d-none d-sm-block">
                    <b> </b>
                </div>
                <strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        @include('admin.partials.footer')

<header class="main-header">
    <!-- Logo -->
    @include('partials.site-logo')
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ base_url('assets/adminlte/dist/img/avatar04.png') }}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">Ahsan Pratama</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ base_url('assets/adminlte/dist/img/avatar04.png') }}" class="img-circle" alt="User Image" />
                            <p>
                            Ahsan Pratama - Petugas Kalibrasi
                            <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ base_url('auth/logout') }}" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

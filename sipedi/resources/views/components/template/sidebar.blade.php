<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ url('/') }}/dist/img/LOGO 2.jpg" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIPEDI</span>
    </a>

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="{{ url('/') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div> --}}
            <div class="info">

                @if (auth()->check())
                <a href="#" class="d-block">{{ auth()->user()->nama }}</a>
                    @else
                    <a href="#" class="d-block">{{ auth()->guard('mahasiswa')->user()->nama }}</a>

                    @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">{{ $header }}</li>
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                @include('menu.' . $menu)
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('master-mobil')}}" class="brand-link elevation-4">      
        <span class="brand-text font-weight-light">Mobilkamu.com</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                $active = '';
                $menu_open = '';
                $master_data = ['master-users', 'master-mobil', 'master-brand'];
                if (in_array(Request::segment(1), $master_data)) {
                    $active = 'active';
                    $menu_open = 'menu-open';
                }
                ?>

                <li class="nav-item">
                    <a href="{{asset('master-mobil')}}" class="nav-link {{ Request::segment(1) == 'master-mobil' ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Submission</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{asset('master-brand')}}" class="nav-link {{ Request::segment(1) == 'master-brand' ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Brand</p>
                    </a>
                </li>                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
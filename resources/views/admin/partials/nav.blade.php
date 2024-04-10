<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item menu-open">
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link  {{ request()->is('admin') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Link2 v2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index3.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Link v3</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="pages/widgets.html" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Widgets
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Layout Options
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Navigation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Navigation + Sidebar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/boxed.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Boxed</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Sidebar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Sidebar <small>+ Custom Area</small></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/fixed-topnav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Navbar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/fixed-footer.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Footer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Collapsed Sidebar</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Charts
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ChartJS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/charts/flot.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Flot</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/charts/inline.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inline</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/charts/uplot.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>uPlot</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">

        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/UI/general.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>General</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/UI/icons.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/UI/buttons.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buttons</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/UI/sliders.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/UI/modals.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Modals & Alerts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/UI/navbar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Navbar & Tabs</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/UI/timeline.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Timeline</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/UI/ribbons.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ribbons</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item {{ request()->is('admin/posts*') ? 'menu-is-opening menu-open' : '' }}">
        <a href="#" class="nav-link  {{ request()->is('admin/posts*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Blog
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.posts.index') }}" class="nav-link {{ request()->is('admin/posts') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Ver todos los posts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.posts.create') }}" class="nav-link {{ request()->is('admin/posts/create') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Crear un Post</p>
            </a>
          </li>
       
        </ul>
      </li>

     
    </ul>
  </nav>
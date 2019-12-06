<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Ferreteria</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-link"></i>
              <p>
                 Almacen
                  <i class="right fas fa-angle-left"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('almacen/articulo') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Artículos
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/almacen/categoria') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Categorías
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-link"></i>
                <p>
                    Compras
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('proveedor.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Proveedores
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('ingreso.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Ingresos
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-link"></i>
                <p>
                    Ventas
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('cliente.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Clientes
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cart-show') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Carrito
                  </a>
            </li>           
          </ul>
        </li>
        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-link"></i>
            <p>
              Reportes
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('reporte-ventas') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Por ventas
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('reporte-user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Por Usuario
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('reporte-articulo') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Por Articulo
              </a>
            </li>
          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<aside class="main-sidebar sidebar-dark-primary elevation">
  <!-- Brand Logo -->
  <a href="{{ route('inicioAdmin') }}" class="brand-link">
    <img src="{{asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Ferreteria</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    
    <!-- Sidebar user panel (optional) 
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">  </a>
      </div>
    </div>-->
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
       
       <!--de aqui para adelante esta para cliente-->
       
     @if(Auth::user()->rol == 'user')
     
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">Menu Usuario</a> 
        </li>
        <li class="nav-item has-treeview">
          <a href="{{ route('inicio') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            Artículos
          </a>         
        </li>
        <li class="nav-item has-treeview">
          <a href="{{ url('cliente/categoria') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              Categorias
          </a>        
        </li>
        <li class="nav-item">
          <a href="{{ route('cart-show') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            Carrito
          </a>
        </li>      
  
    </ul>  
    
    <!--fin de usuario de cliente-->
     @elseif(Auth::user()->rol == 'admin')
         
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">Menu Admin</a> 
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-link"></i>
                 Almacen
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
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Clientes
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
            <li class="nav-item">
              <a href="{{ route('reporte-compra') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Compra articulos
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cantidad') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Cantidad Compra
              </a>
            </li>
          </ul>
        </li>
        
      </ul>
          
     
     @endif          
  
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
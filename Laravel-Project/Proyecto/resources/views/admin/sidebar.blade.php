<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/avatar-7.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Dionys S.</h1>
            <p>Web Master</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
        <ul class="list-unstyled">
                <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Inicio </a></li>
                <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Categorías</a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Productos</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Agregar Producto</a></li>
                    <li><a href="{{url('view_product')}}">Ver Productos</a></li>
                  </ul>
                </li>
                <li><a href="{{url('view_orders')}}"> <i class="fa fa-cart-plus"></i>Ver Pedidos</a></li>

        </ul>
      </nav>
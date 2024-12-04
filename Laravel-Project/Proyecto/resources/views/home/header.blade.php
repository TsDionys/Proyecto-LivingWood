<header class="header_section">
      
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('/')}}l">
          <span>
            Living Wood
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('why_us')}}">
                ¿Por qué nosotros?
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('testimony')}}">
                Testimonios
              </a>
            </li>
          </ul>
          <div class="user_option">
          @if (Route::has('login'))
              @auth
              <ul class="navbar-nav  ">
              <li class="nav-item">
              <a class="nav-link" href="{{url('my_orders')}}">
                Mis pedidos
              </a>
            </li>
              </ul>

              <a href="{{url('mycart')}}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              —{{$count}}
              </a>

              <form style="padding: 10px" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input class="btn btn-access" type="submit" value="Cerrar sesión">                    
                </form>

            @else

            <a href="{{url('/login')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Iniciar sesión
              </span>
            </a>
          
            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>
                Registrarse
              </span>
            </a>

            @endauth
          @endif
           
          </div>
        </div>
      </nav>
    </header>
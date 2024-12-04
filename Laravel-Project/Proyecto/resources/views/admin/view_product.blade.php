<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg{
            border: 2px solid burlywood;
        }

        th{
            background-color: #8d3035;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
        }

        td{
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }

        input[type='search']{
            width: 400px;
            height: 40px;
            margin-left: 50px;
        }

    </style>
  </head>
  <body>
   @include('admin.header')
      <!-- Sidebar Navigation-->
       @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Todos los productos</h1>

            <form action="{{url('product_search')}}" method="get">
                @csrf
                <input type="search" name="search">
                <input type="submit" class="btn btn-secondary" value="Buscar">
            </form>
           
    <div class="div_deg">
        <table class="table_deg">
            <tr>
                <th>
                    Nombre del Producto
                </th>
                <th>
                    Descripción
                </th>
                <th>
                    Categoría
                </th>
                <th>
                    Precio
                </th>
                <th>
                    Cantidad
                </th>
                <th>
                    Imagen
                </th>

                <th>
                   Editar
                </th>

                <th>
                    Eliminar
                </th>
            </tr>
            
            @foreach($product as $products)

            <tr>
                <td>{{$products->title}}</td>
                <td>{!!Str::limit($products->description, 50)!!}</td>
                <td>{{$products->category}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->quantity}}</td>
                <td>
                    <img width="100px" height="100px" src="products/{{$products->image}}" alt="No se ha detectado una imagen">
                </td>

                <td>
                    <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Editar</a>
                </td>
                <td>
                    <a class="btn btn-danger"  onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Eliminar</a>
                </td>
            </tr>

            @endforeach

        </table>

    </div>

        <div class="div_deg">  
        {{$product->onEachSide(1)->links()}} 
        </div>



      </div>
    </div>
    <!-- SweetAlert Confirmation Script -->
    <script>
        function confirmation(event) {
            event.preventDefault(); // Prevent the default action
            var urlToRedirect = event.currentTarget.getAttribute('href'); // Get the href attribute

            swal({
                title: "¿Está seguro de querer eliminar esto?",
                text: "Este cambio no puede ser revertido.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect; // Redirect if confirmed
                }
            });
        }
    </script>
    <!-- JavaScript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
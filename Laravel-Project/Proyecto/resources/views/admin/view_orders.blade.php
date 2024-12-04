<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

<style>
        table{
            border: 2px solid burlywood;
            text-align: center;
        }

        th{
            background-color: #8d3035;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
            text-align: center;
        }

        td{
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }

        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
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

          <div class="div_deg"> 
          <table>
            <tr>
                <th>Nombre del Cliente</th>
                <th>Dirección</th>
                <th>Número de Contacto</th>
                <th>Categoría del Producto</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Cambiar estado del Pedido</th>



            </tr>

            @foreach ($data as $data)
            

            <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->client_address}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->product->category}}</td>
            <td>{{$data->product->title}}</td>
            <td>${{$data->product->price}}</td>
            <td>
                <img width="100px" height="100px" src="products/{{$data->product->image}}" alt="">
            </td>
            <td>{{$data->status}}</td>
            <td>
                <a class="btn btn-primary" href="{{url('on_delivery',$data->id)}}">En delivery</a>

                <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Entregado</a>

            </td>

       
          

            </tr>

            @endforeach

           </table>

          </div>


      </div>
    </div>
    <!-- JavaScript files-->
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
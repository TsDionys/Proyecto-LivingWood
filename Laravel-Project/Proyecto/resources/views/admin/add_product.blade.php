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
        
        h1{
            color: white;
        }

        form label{
            display: inline-block;
            width: 200px;
            font-size: 20px;
            color: white;
        }

        input[type='text']{
            width: 350px;
            height: 50px;
        }
        textarea{
            width: 450px;
            height: 80px;
        }
        
        .input_deg{
            padding: 15px;
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

            <h1>Agregar Productos</h1>

            <div class="div_deg">
                <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                    
                @csrf

                    <div class="input_deg">
                        <label for="">Nombre del Producto</label>
                        <input type="text" name="title">
                    </div>

                    <div class="input_deg">
                        <label for="">Descripción</label>
                        <textarea name="description" id="" required></textarea>
                    </div>

                    <div class="input_deg">
                        <label for="">Precio</label>
                        <input type="text" name="price">
                    </div>

                    <div class="input_deg">
                        <label for="">Cantidad</label>
                        <input type="text" name="qty">
                    </div>

                    <div class="input_deg">
                        <label for="">Categoría del Producto</label>
                        <select name="category" id="" required>
                            <option value="">Seleccione una opción</option>

                            @foreach ($category as $category)
                            
                            
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="input_deg">
                        <label for="">Imagen del Producto</label>
                        <input type="file" name="image">
                    </div>

                    <div class="input_deg">
                        <input class="btn btn-success" type="submit" value="Agregar producto">
                    </div>
                </form>
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
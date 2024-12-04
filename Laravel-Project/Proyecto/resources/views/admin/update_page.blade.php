<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')


    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        input[type='text']{
            width: 400px;
            height: 40px;
        }
        form label{
            display: inline-block;
            width: 200px;
            font-size: 20px;
            padding: 20px;
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
           
            <h2>Editar producto</h2>
                <div class="div_deg">
                    <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf
                        <div>
                            <label for="">Nombre</label>
                            <input type="text" name="title" value="{{$data->title}}">                            
                        </div>

                        <div>
                            <label for="">Descripción</label>
                            <textarea name="description">{{$data->description}}</textarea>                            
                        </div>

                        <div>
                            <label for="">Precio</label>
                            <input type="number" name="price" value="{{$data->price}}">                            
                        </div>

                        <div>
                            <label for="">Cantidad</label>
                            <input type="number" name="qty" value="{{$data->quantity}}">                            
                        </div>

                        <div>
                            <label for="">Categoría</label>
                            <select name="category">
                                <option value="{{$data->category}}">{{$data->category}}</option>
                                
                                @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div>
                            <label for="">Imagen actual</label>
                            <img width="200" height="200" src="/products/{{$data->image}}" alt="">                          
                        </div>

                        
                        <div>
                            <label for="">Nueva imagen</label>
                            <input type="file" name="image">
                        </div>


                        <div>
                            <input class="btn btn-success" type="submit" name="" value="Actualizar producto">                            
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
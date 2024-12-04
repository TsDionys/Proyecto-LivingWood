<!DOCTYPE html>
<html>

<head>
 @include('home.css')
 <style>
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 50px;
        padding: 10px;
    }

    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }
    th{
        border: 2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight: bold;
        background-color: #A1662F;
    }
    td{
        border: 1px solid black;
    }

    .cart_value{
        text-align: center;
        margin-bottom: 60px;
        padding: 15px;
    }

    .order_frm{ 
        padding-top: 200px;
        padding-right: 90px;
        margin-top: -200px;

    }

    label{
        width: 100px;
        display: inline-block;
    }

    .div_div{
        padding: 15px;
    }
 </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <h1 style="color: black">Productos en el carrito</h1>
    <div class="div_deg">

        <div class="order_frm">
            <form action="{{url('confirm_order')}}" method="post">
                
                @csrf

                <div class="div_div">
                    <label for="">Nombre del Cliente</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}">
                </div>

                <div class="div_div">
                    <label for="">Ingrese su dirección</label>
                    <textarea type="text" name="address">{{Auth::user()->address}}</textarea>
                </div>

                <div class="div_div">
                    <label for="">Número de Contacto</label>
                    <input type="text" name="phone" value="{{Auth::user()->phone}}">
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Realizar pedido">
                </div>
            </form>
        </div>
        <table>
            <tr>

                <th>Categoría</th>
                <th>Nombre del producto</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Eliminar producto</th>

            </tr>
            
            <?php

            $value = 0;

            ?>

            @foreach ($cart as $cart)
            
            <tr>
                <td>{{$cart->product->category}}</td>
                <td>{{$cart->product->title}}</td>
                <td>${{$cart->product->price}}</td>
                <td>
                    <img width="105" src="/products/{{$cart->product->image}}" alt="">
                </td>
                <td>
                    <a class="btn btn-danger" href="{{url('delete_cart', $cart->id)}}">Remover</a>
                </td>
            </tr>

            <?php

            $value = $value + $cart->product->price;

            ?>

            @endforeach


        </table>
    </div>

    <div class="cart_value">

    <h3>Valor total de la orden: ${{$value}}</h3>

    </div>


  <!-- info section -->
  @include(('home.info'))

<!-- footer section -->
@include(('home.footer'))
<!-- footer section -->

</section>

<!-- end info section -->
</body>

</html>
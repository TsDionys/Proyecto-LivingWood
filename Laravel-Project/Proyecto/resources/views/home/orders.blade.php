<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pedidos</title>
    <style>
        table{
            border: 2px solid black;
            text-align: center;
            padding: 100px;

        }

        th{
            background-color: black;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 150px;
            text-align: center;
        }

        td{
            border: 1px solid skyblue;
            text-align: center;
            color: black;
            padding: 50px;
        }

        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
        }

</style>

</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    <div class="div_deg">
        <table>
            <tr>
                <th>Categoría</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Estado</th>
            </tr>

            @foreach ($order as $order)
            
            <tr>
                <td>{{$order->product->category}}</td>
                <td>{{$order->product->title}}</td>
                <td>{{$order->product->price}}</td>
                <td>{{$order->status}}</td>
            </tr>
            
            @endforeach

        </table>
    </div>

    </div>


    <!-- footer section -->
    @include(('home.footer'))
    <!-- footer section -->

</section>
</body>
</html>
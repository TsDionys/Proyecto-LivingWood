<!DOCTYPE html>
<html>

<head>
 @include('home.css')

 <style>
    .div_center{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    .detail-box{
        padding: 10px;
    }
 </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

  </div>
  <!-- end hero area -->

    <!--PRODUCT DETAILS SECTION START-->
    <section class="shop_section layout_padding">
    <div class="container"> 
      <div class="heading_container heading_center">
        <h2>
          DETALLES DEL PRODUCTO
        </h2>
      </div>
      <div class="row">
     
        <div class="col-md-11 ">
          <div class="box">
              <div class="div_center">
                <img width="450px" src="/products/{{$data->image}}" alt="">
              </div>

              <div class="detail-box">
                <h6>{{$data->title}}</h6>
                <h6>Precio:
                  <span> ${{$data->price}}</span>
                </h6>
              </div>

              <div class="detail-box">
                <h6>Categoría: {{$data->category}}</h6>
                <h6>Cantidad disponible:
                  <span>{{$data->quantity}}</span>
                </h6>
              </div>

              <div class="detail-box">
                  <p>{{$data->description}}</p>
              </div>

              <div class="detail-box">
              <a class="btn btn-primary" href="{{url('add_cart', $data->id)}}">Ordenar</a>
              </div>

          </div>
        </div>
        </div>

    </div>
  </section>
   
    <!--PRODUCT DETAILS SECTION END-->

  <!-- info section -->
    @include(('home.info'))

    <!-- footer section -->
    @include(('home.footer'))
    <!-- footer section -->

  </section>

  <!-- end info section -->
</body>

</html>
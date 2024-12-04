<!DOCTYPE html>
<html>

<head>
 @include('home.css')

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    
    <!-- end header section -->
    <!-- slider section -->

    @include(('home.slider'))


    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- product section -->

  @include(('home.products'))

  <!-- end product section -->

  <!-- contact section -->

    @include(('home.contact'))

  <!-- end contact section -->   

  <!-- info section -->
    @include( ('home.info'))

    <!-- footer section -->
    @include(('home.footer'))
    <!-- footer section -->
 
  <!-- end info section -->
</body>

</html>
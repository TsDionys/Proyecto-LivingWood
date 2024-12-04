<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonios</title>


</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->


    <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonios
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Carla Medina
                  </h5>
                  <h6>
                    Cliente satisfecha
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              "Estoy completamente satisfecho con el servicio de Ebanistería Living Wood. El equipo entendió perfectamente mis necesidades y diseñó un mueble personalizado que superó mis expectativas. La calidad de los materiales y la atención al detalle fueron excepcionales. Además, el proceso fue rápido y sin complicaciones. Sin duda, recomendaré sus servicios a amigos y familiares."              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Ana Rodríguez
                  </h5>
                  <h6>
                    Cliente satisfecha
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              "El trabajo de Ebanistería Living Wood fue impecable. Desde el primer contacto, el equipo mostró gran profesionalismo y dedicación. La pieza que encargué se ajustó perfectamente a lo que necesitaba, con un acabado de calidad superior. Estoy muy contento con el resultado y con el excelente trato recibido durante todo el proceso."              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    José Martínez
                  </h5>
                  <h6>
                    Cliente satisfecho
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              "Una experiencia increíble con Ebanistería Living Wood. Me ayudaron a crear el mueble ideal para mi hogar, con un diseño único y funcional. Además, la entrega fue puntual y todo el proceso fue claro y sin contratiempos. Definitivamente seguiré contando con ellos para futuros proyectos."              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  @include( ('home.info'))

    <!-- footer section -->
    @include(('home.footer'))
    <!-- footer section -->

</body>
</html>
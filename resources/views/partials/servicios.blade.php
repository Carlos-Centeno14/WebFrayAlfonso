@section('content')
    <div class="container">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Fray Alfonso Muebles</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
          </head>
          <body>
            <!-- Nav para las paginas navbar navbar-expand-lg bg-body-tertiary-->

         <!-- Body-->
         <div class="banner">
            <img src="{{ asset('img/Banner.jpg') }}" alt="Banner">
            <div class="banner-text fw-bold ">
                <p>Transforma tu hogar con <br> los mejores muebles del lugar</p>
                <div class="fs-4 fw-light">
                    <p> Descubre una alta gama de muebles para
                    <br> mejorar el estilo de tu hogar</p>
                </div>
                    <div class="justify-content-center" >
                <button type="button" class="btn btn-outline-primary custom-btn-color">Comprar</button>
            </div>
            </div>
        </div>
        <!-- Empezar desde aca abajo -->

          <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto pb-5">
            <h1 class="p-3 fs-2 border-top border-2 fw-bolder">Nuestros Servicios</h1>
          </section>

          <section id="intro" class="d-flex flex-column justify-content-start pt-5 text-start w-10 m-auto pb-5">
            <h1 class="p-3 fs-2 fw-bolder FaresaltadoTit">Diseño personalizado de muebles</h1>
            <p class="p-3 fs-4 fw-light"><span class="FaresaltadoTxt fw-bold">Fray Alfonso Muebles</span> se encarga de transformar tus necesidades en los muebles perfectos para tu hogar, con el perfecto estilo y los materiales de la mas alta calidad.
              Nosotros te brindamos un excelente servicio con una grata experiencia para asegurar la mayor satisfaccion en el proceso de creacion de muebles unicos
                <br>
                <br>
                <span class="FaresaltadoTit fw-bold text-center justify-content-center">Proceso Creativo</span>
            <!-- Tarjetas para los servicios -->
            <!--<div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap bg-dark bg-opacity-10 p-3 rounded">-->
            <div class="p-5 row w-75 mx-auto fila justify-content-between mb-3">
              <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex flex-column wrap tarjeta-color p-3 rounded">
                <img src="{{ asset('img/proceso4.jpg') }}" width="180" height="300">
                <div class="ms-3">
                  <h3 class="fs-5 mt-4 fw-bold justify-content-center text-center tarjeta-font">Especificaciones</h3>
                  <p>Uno de nuestros especialistas te ayudara a aplsmar tus ideas en papel</p>
                </div>
              </div>

              <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex flex-column wrap tarjeta-color2 p-3 rounded">
                <img src="{{ asset('img/proceso2.jpg') }}" width="180" height="300">
                <div class="ms-3">
                  <h3 class="fs-5 mt-4 fw-bold justify-content-center text-center tarjeta-font">Manos a la Obra</h3>
                  <p>Nuestro equipo de trabajo  realizara el proceso de produccion</p>
                </div>
              </div>

              <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex flex-column wrap tarjeta-color p-3 rounded">
                <img src="{{ asset('img/proceso1.jpg') }}" width="180" height="300">
                <div class="ms-3">
                  <h3 class="fs-5 mt-4 fw-bold justify-content-center text-center tarjeta-font">Trabajo en Equipo</h3>
                  <p>Tu eres parte de este equipo y posterior a la entrega podras instalar en tu espacio</p>
                </div>
              </div>
          </div>
         </div>

          </section>

          <section id="intro" class="d-flex flex-column justify-content-start pt-5 text-start w-10 m-auto pb-5 tarjeta-color">
            <h1 class="p-3 fs-2 fw-bolder FaresaltadoTit">Ideas de personalizacion</h1>
            <p class="p-3 fs-4 fw-light">Personalizar tu espacio es lo mas importante para nosotros es por eso que te brindamos una amplia galeria de estilos e ideas para tu espacio.

              <!-- Imagenes -->
        <div id="cardSlider" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicadores -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#cardSlider" data-bs-slide-to="2"></button>
          </div>

          <!-- Slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="mx-5 row justify-content-between">
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <!-- <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex flex-column wrap tarjeta-color p-3 rounded"> -->
                  <img src="{{ asset('img/imgsl2.jpg') }}" width="180" height="240">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <img src="{{ asset('img/imgsl3.jpg') }}" width="180" height="240">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <img src="{{ asset('img/imgsl4.jpg') }}" width="180" height="240">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="mx-5 row justify-content-between">
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <img src="{{ asset('img/ims1.jpg') }}" width="180" height="240">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <img src="{{ asset('img/ims2.jpg') }}" width="180" height="240">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                    <img src="{{ asset('img/ims3.jpg') }}" width="180" height="240">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="mx-5 row justify-content-between">
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <img src="{{ asset('img/ims4.jpg') }}" width="180" height="240">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <img src="{{ asset('img/ims5.jpg') }}" width="180" height="240">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-wh p-3 rounded">
                  <img src="{{ asset('img/ims6.jpg') }}" width="180" height="240">
                </div>
              </div>
            </div>
          </div>

          <!-- Controles de navegación -->
          <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        </section>

        <section id="intro" class="d-flex flex-column justify-content-start pt-5 text-start w-10 m-auto pb-5">
          <br>
          <br>
          <h1 class="p-3 fs-2 fw-bolder FaresaltadoTit">Venta de Muebles</h1>
          <p class="p-3 fs-4 fw-light">Compra de muebles 100% Mexicanos, <a href="Contacto.html" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Contactanos</a> para recibir mas informacion.
              <br>
              <br>
          <img src="{{ asset('img/Banner.jpg') }}" alt="">
        </section>

          <!-- Y Terminar la programacion aqui -->

                <section class="container-fluid">
                  <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto pb-5">
                  </section>
                  <!-- Fondo footer -->
                  <section class="w-100">
                    <img src="{{ asset('img/layered-peaks-haikei.svg') }}" alt="">
                </section>

                <footer class="w-100 d-flex justify-content-center align-items-center text-center">
                    <p class="fs-5 px-3 pt-3">Fray Alfonso Muebles &copy; Carlos Centeno todos los derechos reservados 2023</p>
                </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
          </body>
    </div>
@endsection

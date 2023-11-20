{{-- @extends('layouts.app') --}}

@section('content')

<div class="container">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fray Alfonso Muebles</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <!-- Styles -->
    </head>
    <body class="antialiased">
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
          <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto pb-5">
            <h1 class="FaresaltadoTit p-3 fs-2 border-top border-5 fw-bolder">Fray Alfonso Muebles</h1>
            <p class="p-3 fs-4 fw-light"><span class="FaresaltadoTxt fw-bold">Fray Alfonso Muebles</span>, tu primer destino para muebles de calidad. Ubicados en Lagos de Moreno, Jalisco, Mexico, Nos especializamos en la fabricacion de muebles de alta calidad para cualquier espacio, con atencion al detalle y con personal capacitado te brindamos la mas amplia galeria de muebles e ideas para tu hogar
                <br>
                En <span class="FaresaltadoTxt">Fray Alfonso Muebles</span> entendemos que un mueble es una necesidad funcional, bonita y de calidad enfocados en transformar
                tu vision en un reflejo de tu personalidad unica.</p>
          </section>
          <section class="container-fluid">
            <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto pb-5">
              <h1 class="FaresaltadoTxt p-3 fs-2 border-top border-5">Historia</h1>
              <p class="p-3 fs-4 fw-light"> Hace casi tres décadas, en el pueblo de Lagos de Moreno, Jalisco, el artesano local don Alfonso Velázquez fundó <span class="FaresaltadoTxt fw-bold">Fray Alfonso Muebles</span> en 1995. Con una excepcional habilidad para la carpintería y una dedicación meticulosa, don Alfonso transformó la madera en obras maestras. <br> <br> La empresa se convirtió en sinónimo de excelencia y autenticidad, atrayendo a artesanos locales. Sus diseños, inspirados en la cultura mexicana, adornan hogares por todo el país. Hoy en día, Fray Alfonso Muebles sigue siendo un emblema de la excelencia artesanal y el legado de don Alfonso.
                <br>
                <h1 class="FaresaltadoTxt p-3 fs-2 border-top border-5">Atención personalizada</h1>
            </section>
            <!-- Tarjetas para los servicios -->
            <div class="p-5 row w-75 mx-auto fila justify-content-between mb-3">
                <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex wrap bg-dark bg-opacity-10 p-3 rounded">
                  <img src="./img/venta.jpg" width="180" height="160">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4 fw-bold">Venta de Muebles</h3>
                    <p>Venta de muebles de la mayor calidad</p>
                  </div>
                </div>
                <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex wrap bg-dark bg-opacity-10 p-3 rounded">
                  <img src="./img/ideas.jpg" width="180" height="160">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4">Ideas de uso</h3>
                    <p>Galería de imágenes para inspirarte</p>
                  </div>
                </div>

                <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex wrap bg-dark bg-opacity-10 p-3 rounded">
                  <img src="./img/contacto.jpg" width="180" height="160">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4">Contacto de Información</h3>
                    <p>Atención personalizada y seguimiento</p>
                  </div>
                </div>
            </div>


            <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto pb-5">
              <h1 class="FaresaltadoTit p-3 fs-2 border-top border-5 fw-bold">OFERTAS!</h1>
              <p class="p-3 fs-4 fw-light"><span class="FaresaltadoTxt fw-bold">Fray Alfonso Muebles</span> te presenta productos en descuento
            </section>


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
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap slmuebles p-3 rounded">
                  <!-- <div class="my-2 col-lg-3 col-md-12 col-sm-12 d-flex flex-column wrap tarjeta-color p-3 rounded"> -->
                  <img src="{{ asset('img/Mueb1.jpg') }}" width="180" height="240">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4 tarjeta-font">Mueble #1</h3>
                    <p class="fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-color p-3 rounded">
                  <img src="{{ asset('img/Mueb2.jpg') }}" width="180" height="240">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4 tarjeta-font">Mueble #2</h3>
                    <p class="fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-color2 p-3 rounded">
                  <img src="{{ asset('img/Mueb3.jpg') }}" width="180" height="240">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4 tarjeta-font">Mueble #3</h3>
                    <p class="fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="mx-5 row justify-content-between">
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap slmuebles p-3 rounded">
                  <img src="{{ asset('img/Mueb5.jpg') }}" width="180" height="240">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4 tarjeta-font">Mueble #4</h3>
                    <p class=" fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-color p-3 rounded">
                  <img src="{{ asset('img/Mueb6.jpg') }}" width="180" height="240">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4 tarjeta-font">Mueble #5</h3>
                    <p class=" fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-color2 p-3 rounded">
                    <img src="{{ asset('img/Mueb6.jpg') }}" width="180" height="240">
                  <div class="ms-3">
                    <h3 class="fs-5 mt-4 tarjeta-font">Mueble #6</h3>
                    <p class=" fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="mx-5 row justify-content-between">
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap slmuebles p-3 rounded">
                  <img src="{{ asset('img/Mueb7.jpg') }}" width="180" height="240">
                  <div class="ms-3 mt-3 text-center">
                    <h3 class="fs-5 tarjeta-font mt-4">Mueble #7</h3>
                    <p class=" fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-color p-3 rounded">
                  <img src="{{ asset('img/Mueb8.jpg') }}" width="180" height="240">
                  <div class="ms-3 mt-3 text-center">
                    <h3 class="fs-5 tarjeta-font mt-4">Mueble #8</h3>
                    <p class=" fw-bolder">Precio: $9,999</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column align-items-center wrap tarjeta-color2 p-3 rounded">
                  <img src="{{ asset('img/Mueb9.jpg') }}" width="180" height="240">
                  <div class="ms-3 mt-3 text-center">
                    <h3 class="fs-5 tarjeta-font mt-4">Mueble #9</h3>
                    <p class=" fw-bolder">Precio: $9,999</p>
                  </div>
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

{{-- @extends('partials.navegacion') --}}

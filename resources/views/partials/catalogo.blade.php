@section('content')
<div>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fray Alfonso Muebles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
      </head>
      <body>

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
        <h1 class="p-3 fs-2 border-top border-2 fw-bolder FaresaltadoTit">Catalogo</h1>
      </section>

      <section class="gallery">
        <div class="container">
            <div class="row">
                @foreach($productos as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{asset($producto->RutaImg)}}" class="card-img-top" alt="{{ $producto->Descripcion }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->Descripcion }}</h5>
                                <p class="card-text FaresaltadoTxt">Precio: ${{ $producto->Precio }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
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

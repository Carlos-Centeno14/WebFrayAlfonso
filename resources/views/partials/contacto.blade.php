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

          <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto">
            <h1 class="p-3 fs-2 border-top border-2 fw-bolder FaresaltadoTit">Contacto</h1>
          </section>

          <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto pb-5">

            <p class="p-3 fs-4 fw-light"><span class="FaresaltadoTxt">Direccion: </span>Ubicados en Calle Fray Alfonso numero #14, Colonia El Refugio, Correo Postal 47470, Ciudad Lagos de Moreno, Jal.
              <br>
              <br>
              <span class="FaresaltadoTxt">Opciones de servicio:</span> Compras en tienda · Entrega a domicilio</p>


            <div class="contacto">
              <div class="justify-content-center">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                  <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                      var setting = {"query":"Fray Alfonso 14, El Refugio, 47470 Lagos de Moreno, Jal., México","width":1000,"height":559,"satellite":false,"zoom":14,"placeId":"ChIJC3AjvM3TK4QRdzfHzvklykM","cid":"0x43ca25f9cec73777","coords":[21.3469024,-101.938685],"lang":"es","queryString":"Fray Alfonso 14, El Refugio, 47470 Lagos de Moreno, Jal., México","centerCoord":[21.3469024,-101.938685],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1015981"};
                      var d = document;
                      var s = d.createElement('script');
                      s.src = 'https://1map.com/js/script-for-user.js?embed_id=1015981';
                      s.async = true;
                      s.onload = function (e) {
                        window.OneMap.initMap(setting)
                      };
                      var to = d.getElementsByTagName('script')[0];
                      to.parentNode.insertBefore(s, to);
                    })();</script><a href="https://1map.com/es/map-embed">1 Map</a></div>
              </div>
          </div>
          </section>

          <section id="intro" class="d-flex flex-column justify-content-center pt-5 text-center w-50 m-auto">

            <p class="p-3 fs-4 fw-light"><span class="FaresaltadoTxt">Contactanos</span> y uno de nuestros agentes te atendera con la mejor atencion para un cliente preferente como tu.
              <br>
              <br>
          </section>
          <section id="intro" class="d-flex flex-column justify-content-center  w-50 m-auto">
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Agregue un email valido
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Estado</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Estado...</option>
                    <option value="Aguascalientes">Aguascalientes</option>
          <option value="Baja California">Baja California</option>
          <option value="Baja California Sur">Baja California Sur</option>
          <option value="Campeche">Campeche</option>
          <option value="Chiapas">Chiapas</option>
          <option value="Chihuahua">Chihuahua</option>
          <option value="Ciudad de México">Ciudad de México</option>
          <option value="Coahuila">Coahuila</option>
          <option value="Colima">Colima</option>
          <option value="Durango">Durango</option>
          <option value="Estado de México">Estado de México</option>
          <option value="Guanajuato">Guanajuato</option>
          <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
          <option value="Jalisco">Jalisco</option>
          <option value="Michoacán">Michoacán</option>
          <option value="Morelos">Morelos</option>
          <option value="Nayarit">Nayarit</option>
          <option value="Nuevo León">Nuevo León</option>
          <option value="Oaxaca">Oaxaca</option>
          <option value="Puebla">Puebla</option>
          <option value="Querétaro">Querétaro</option>
          <option value="Quintana Roo">Quintana Roo</option>
          <option value="San Luis Potosí">San Luis Potosí</option>
          <option value="Sinaloa">Sinaloa</option>
          <option value="Sonora">Sonora</option>
          <option value="Tabasco">Tabasco</option>
          <option value="Tamaulipas">Tamaulipas</option>
          <option value="Tlaxcala">Tlaxcala</option>
          <option value="Veracruz">Veracruz</option>
          <option value="Yucatán">Yucatán</option>
          <option value="Zacatecas">Zacatecas</option>
                </select>
                <div class="invalid-feedback">
                  Selecciona un estado valido.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom09" class="form-label">Mensaje:</label>
                <div class="input-group">
                  <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Terminos y condiciones
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-dark" type="submit">Enviar</button>
              </div>
            </form>
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

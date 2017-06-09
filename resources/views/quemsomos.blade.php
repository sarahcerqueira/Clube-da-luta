<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clube da luta</title>

        <!-- Styles -->
        <link href="{{asset('css/estilo.css')}}" rel="stylesheet"/>
        <link href="{{asset('css/materialize.css')}}" rel="stylesheet"/>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" />

    </head>
    <body>

      <div class="cabecalho">
        <div style="border:solid; border-top:0.5px; border-right:0.5px; border-left:0.5px; color:gray">
          <h3 style="color: #8B7D7B; margin-left: 20px;" class="title">Clube da luta</h3>
          <h5 class="subtitle">Pela liberdade de escolha da mulher!</h5>
        </div>
        <img src="{{asset('img/capa3.jpg')}}" style="width: 100%;height: 250px" />


      </div>



      <div  class="flex-center position-ref "style="border: solid;    border-width: 2px;background-color: #B03060">
          <div>
              <div id="link" class="links">
                 <a href="/">Início</a>
                  <a href="/quemsomos">Quem somos</a>
                  <a href="/artigos">Artigos</a>
                  <a href="/historia">Histórias reais</a>
                  <a href="/precisadeajuda">Precisa de ajuda?</a>
                  <a href="/appajuda">Apps de ajuda</a>


              </div>
          </div>
      </div>




      <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="http://www.portalnovarejo.com.br/wp-content/uploads/2016/06/empoderamento_feminino_negocios.jpg">
              <span class="card-title" style="color: orange">Quem somos?</span>
            </div>
            <div class="card-content" style="color: green">
              <p>O Clube da Luta é um site de concientização e acolhimento para vítimas de violência, seja ela moral, física, psicológica , entre outras, permitindo denúncias anônimas e sugestões de grupos feministas em todo o Brasil.</p>
            </div>
          </div>
        </div>
      </div>

       <footer class="page-footer " >
           <div class="footer-copyright" >
             <div class="container">
             © 2017 Copyright Clube da Luta
             </div>
           </div>
         </footer>
         <!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" > </script>
<script> new WOW().init(); </script>
<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<!--Import jQuery before materialize.js-->


    </body>
</html>

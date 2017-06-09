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
         <div class="col s12 m3">
           <div class="card green darken-1">
             <div class="card-content white-text">
               <span class="card-title">Disque denúncia: *180</span>
             </div>
           </div>
         </div>
       </div>


  <div id="artigo" class="row flex-center position-ref">
    <ul>
       @foreach ($papers as $paper)

        <li><a href="{{url('/textoartigo',$paper->id)}}" class="title-artigo" ><h3 class="title-artigo">{{ $paper->title }}</a></li>
        <li><h6 >{{ $paper->date }}</h6></li>
        <li><h5 style="text-color: grey" >{{substr($paper->description, 0, 50)}}...</h5></li>

      @endforeach
      </ul>
      </div>


         <footer class="page-footer " >
           <div class="footer-copyright" >
             <div class="container">
             © 2017 Copyright Clube da Luta
             </div>
           </div>
         </footer>
         <!-- Compiled and minified JavaScript -->


    </body>
</html>

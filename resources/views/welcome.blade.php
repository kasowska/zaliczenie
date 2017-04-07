<!doctype html>
<html>
    <head>
        <title>Testowe</title> 
        <meta charset="UTF-8"> 
        <link rel='stylesheet' href="{{asset('main.css')}}">
        <link rel='stylesheet' href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body class="conteiner-fluid">
        <div class="conteiner-fluid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class=" col-md-8 col-xs-12">
        <nav class="main-menu">
            @include('menu')
        </nav>
          </div></div></div>
        <div class="row">
            <div class="col-md-2"></div>
                <div class=" col-md-8 col-xs-12">           
        <section class="main-section">
      
            <article>
             
                @yield('content')
                
            </article>
           
        </section>
            </div> 
            <div class="col-md-2"></div>
        </div>    
    <foother>
        
       
    </foother>
    </body>
   
</html>
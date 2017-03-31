<!doctype html>
<html>
    <head>
        <title>Testowe</title> 
        <meta charset="UTF-8"> 
        <link rel='stylesheet' href="{{asset('main.css')}}">
    </head>
    <body>
        <nav class="main-menu">
            @include('menu')
        </nav>
        <section class="main-section">
      
            <article>
             
                @yield('content')
                
            </article>
           
        </section>
    <foother>
        
       
    </foother>
    </body>
   
</html>
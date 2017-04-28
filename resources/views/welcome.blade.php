<!doctype html>
<html>
    <head>
        <title>Adventures</title> 
        <meta charset="UTF-8"> 
        <link rel='stylesheet' href="{{asset('main.css')}}">
        <link rel='stylesheet' href="{{asset('css/bootstrap.min.css')}}">
        <script src="{{asset('jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('jquery.js')}}"></script>
    </head>
    <body class="conteiner-fluid">
        <div class="conteiner-fluid">
            <div class="row">
                <div class="col-md-12 logo">
                    <p><img src="{{asset("logo.png")}}" alt="logo" id="logo"></p>
                </div>
            </div>
        </div>
        <div class="conteiner-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2 hidden-xs hidden-sm aside">
                        <p class="about">
                        <img id="about-image" class="about img-responsive" src="{{asset('about.png')}}" alt="cup of latte">
                        <p class="about">We are young traveler who don't afraid adventures! We'll go to Bieszczady next holiday. Please, feel welcome if you want to join us in this trip!</p>
                        <div class="social-media">
                            <a href="https://www.facebook.com/Zalef.Krzysztof/?fref=ts" target="_blank"><img id="social-media" src="{{asset('fb.png')}}" alt="Facebook"></a>
                            <a href="https://youtu.be/br2IQqa2bxk" target="_blank"><img id="social-media" src="{{asset('yt.png')}}" alt="Youtube"></a>
                            <a href="https://www.instagram.com/kas_owska/" target="_blank"><img id="social-media" src="{{asset('insta.png')}}"" alt="Instagram"></a>
                        </div>
                        <div class="button">
                            <button id="bgChanger" type="button" class="btn btn-danger about" onclick="changeBg('{{asset("url.jpg")}}','{{asset("url2.jpg")}}','{{asset("orginURL.jpg")}}')">Click for change!</button>      
                        </div>    
            </div>
          <div class=" col-md-8 col-xs-12">
        <nav class="main-menu">
            @include('menu')
        </nav>
          </div>
                <div class=" col-md-8 col-xs-12">           
        <section class="main-section">
      
            <article>
             
                @yield('content')
                
            </article>
           
        </section>
            </div> 
            <div class="col-md-2"></div>
        </div>
            </div>
    <foother> 
    </foother>
    
    </body>
   
</html>
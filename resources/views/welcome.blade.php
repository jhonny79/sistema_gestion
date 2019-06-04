<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Sistema de Gestion v.1.0</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* estilo del fondo  */   
                background-image: url("{{asset('imagen/fondo07.jpg')}}");
                background-repeat:no-repeat;
                background-position: cover;
                background-size: 100%,100%;
                background-blend-mode: lighten;                
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;                
            }

            .top-left {
                background-color:red;
                margin-top: 0,5px;
                height: 10vh;             
            }

            .top-right {
                margin-top: 0,5px;
                background-color:hsl(240, 100%, 30%);
                background-image: linear-gradient(blue,white);
                padding-top: 16px;             
            }

            .content {
                text-align: center;         
            }
            .content p{
                color :#00264d;
            }

            .title {
                font-size: 70px;
                color: #f877777;
            }

            .cantv_logo {
                height: 90px;
                width: 265px;
            }

            .links > a {
                color: white;
                padding: 25px 50px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;              
            }

            .m-b-md {
                margin-bottom: 30px;
                
            }

            .muestra {
               margin-left:5px;
               background-color:white;
               background-repeat:no-repeat;
               background-size: 10%,10%; 
               border-radius:20px;
                                                
            }

            .nav-bar{     
                display:flex;
                justify-content: space-between;
                background-color:hsl(0, 100%, 40%);
                background-image: linear-gradient(180deg,red,white);
                height: 55px;
                margin-top:5px;
                
            }
        </style>
    </head>
    <body>
        <div class="nav-bar"> 
            <div class= "muestra"> <img src='imagen/logo_cantv.PNG' class="cantv_logo"></div>        
         {{-- <h1>logo cantv</h1> --}}
            @if (Route::has('login'))
                   <div class="top-right links" >
                        @auth
                           <a href="{{ url('/home') }}">Home</a>
                          @else
                                       <a href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                       <a href="{{ route('register') }}">Register</a>
                                @endif
                        @endauth
                      @endif                              
                
                    </div>        
           
        </div>    
        <div class="flex-center position-ref full-height">
                                    

            <div class="content">
                <div class="title m-b-md text" style="text-shadow: 2px 2px 4px #000000";>
                    SISTEMA DE GESTION                    
                </div>
                   <p>Copyright 2019 by CANTV. Todos los Derechos Reservados.</p>
                   <p>Coordinacion Investigación Informática Forense</p>
                   <p> GGSI / GI / CIIF | Confidencial</p>


                  

                <!-- <div class="links">
                    <a href="http://cantv.com/">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
      

    </body>
</html>

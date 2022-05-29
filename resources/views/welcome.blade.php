<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Autoservisas</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
        <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">

        <!-- Styles -->


        <style>
            body {
                margin: 0;
                background-image: url("../images/wordpress-auto-repair-slider.jpg");
                background-size: cover;
                background-position-y: 1000px;
            }
            .mapas {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 300px;
            }

        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        @if (Auth::user()->role == 'user')
                        <a href="{{ url('/order/create') }}" class="home">Home</a>
                        @endif
                        @if (Auth::user()->role == 'admin')
                                <a href="{{ url('/orders') }}" class="home">Home</a>
                            @endif
                    @else
                        <a href="{{ route('login') }}" class="home">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="home">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <h1 class="servis">Servisas</h1>
        <div class="mapas">
            <x-mapbox id="mapId"
                      :navigationControls="true"
                      :markers="[['lat' => 54.898521, 'long' => 23.903597, 'description' => 'Kauno servisas Savanoriu g. 265 +37061829172'],
                      ['lat' => 54.687157, 'long' => 25.279652,'description' => 'Vilniaus servisas Gelezinio Vilko g. 192 +37061829341'],
                      ['lat' => 55.703297, 'long' => 21.144279,'description' => 'Klaipedos servisas Baltijos g. 23 +3706141352']]"
                      :center="['long' => 23.903597, 'lat' => 54.898521]"/>
        </div>

    </body>
</html>

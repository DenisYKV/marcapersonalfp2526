<html>
    <head>
        <title>Mi Web</title>
    </head>
    <body style="background-color: aqua">
        @section('menu')
            Contenido del menu
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

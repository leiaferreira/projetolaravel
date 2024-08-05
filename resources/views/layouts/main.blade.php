<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <!--CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!--fonte do google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


       <!--css da aplicação--> 
        <link rel="stylesheet" href="/css/styles.css">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/hdcevents_logo.svg" alt="logo-hdc">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Cria Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contato/contact" class="nav-link">Entra</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cadastro/cadastros" class="nav-link">Cadastra</a>
                    </li>

                </ul>

            </div>
        </nav>
        @yield('content')
       <footer>
        <p>HDC EVENTS &copy; 2024 </p>
       </footer>
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybVuUUjIBV41JYAdHwTqozmLIFlGQwX4VxVCL5FfS1cXgUzgR" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ho+kVtFWbJfofEXwl8d0T6pM8p0psoKcz0g0iBd9jyfhhUvvVzHy7dS4f+kU7XKU" crossorigin="anonymous"></script>
        <script src="/JS/script.js"></script>
        <!--Icone -->
        <script script  type = "módulo"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script>
        <script script nomodule src= "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>   
    </body>   
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Open+Sans:wght@300;500;600&display=swap" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/style.css">
        <script src = "/js/script.js"></script>
    </head>
    <body>
        
        <header>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    
                    <a href="/" class="navbar-brand">
                        <img src="/img/evente-logo.png" alt="Evente">
                        evente
                    </a>
                    
                    <ul class="navbar nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/evento/criar" class="nav-link">Criar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">

                    @if(session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                    
                </div>
            </div>
        </main>

        <footer>
            <p>
                <a id = "logo" href = "/" alt = "evente - home">Evente</a>
                &copy; 2023</p>
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>

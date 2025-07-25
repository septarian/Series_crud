<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body class="text-white">
    <div class="back position-relative">
        <div class="overlay position-absolute w-100 h-100"></div>

        <div class="contenido position-relative" style="z-index: 1;">
            <div class="bg-light text-dark p-3">
                <section class="container text-center d-flex flex-wrap flex-column flex-md-row justify-content-around gap-3 fs-5 fw-bold link-info my-2">
                    <a href="/erick" class="link-underline link-underline-opacity-0 text-danger-emphasis">Registro de Erick</a>
                    <a href="/eriMovies" class="link-underline link-underline-opacity-0 text-danger-emphasis">Tabla de Erick</a>
                    <a href="/elizabeth" class="link-underline link-underline-opacity-0 text-info">Registro de Elizabeth</a>
                    <a href="/eliMovies" class="link-underline link-underline-opacity-0 text-info">Tabla de Elizabeth</a>
                    <a href="/logout" class="btn btn-danger">Cerrar sesion</a>
                </section>
            </div>

            <div class="container">

                @yield('content')

            </div>
        </div>
    </div>

</body>

</html>

<style>

    body, html{
        margin:0;
        padding:0;
        height:100%;
    }
    .back{
        min-height: 100vh; 
        background-image: url(' {{ asset('imgs/estrellas.webp') }} ');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative
    }
    .overlay{
        position:absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0,0,0,0.6);
        z-index: 1
    }

</style>



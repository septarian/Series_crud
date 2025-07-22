<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Movies & Series</title>
</head>

<body class=" text-white" style="min-height: 100vh; background-color: rgb(19, 14, 50);">

    <div class="bg-light text-dark p-3 ">
        <section class="container text-center d-flex justify-content-evenly gap-4 fs-4 fw-bold link-info">
            <a href="/" class=" link-underline link-underline-opacity-0 text-info-emphasis">Inicio</a>
            <a href="/movies" class=" link-underline link-underline-opacity-0 text-info-emphasis">Tabla de series y peliculas</a>
        </section>
    </div>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
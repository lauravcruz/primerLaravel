<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container py-2">
        <h1 class="display-4 text-center text-danger">Bienvenidos a Laravel, DAW</h1>
        <p class="text-center p-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam rem autem tempore
        </p>
    </div>
    <nav class="navbar navbar-expand-sm navbar-light bg-danger">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                    <a class="nav-link active" aria-current="page" href="/nosotros">¿Quiénes somos?</a>
                    <a class="nav-link active" aria-current="page" href="/proyecto/1">Proyecto</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('nosotros')
    @yield('proyecto')

</body>

</html>

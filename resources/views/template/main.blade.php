<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="nav bg-primary">
            <div class="container p-4 text-center">
                <a class="me-5 text-white" href="/">Beranda</a>
                <a class="me-5 text-white" href="/data">Data</a>
                <a class="me-5 text-white" href="/login">Login</a>
            </div>
        </div>

        <div class="main container">
            @yield('content')
        </div>
    </div>
</body>

</html>
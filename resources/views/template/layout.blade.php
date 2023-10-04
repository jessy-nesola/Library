<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Libreria di Jessy</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="body-background d-flex flex-column min-vh-100">

    <main class="flex-grow-1 main-padding">

        <x-navbar />

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
            </div>
        @endif

        {{ $slot }}
    </main>

    <footer class="footer footer-thin py-4 shadow-lg">
        <div class="container px-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <p class="small m-0 text-light">Copyright &copy; Website by Jessy, 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/navbar-scroll.js') }}"></script>
</body>

</html>

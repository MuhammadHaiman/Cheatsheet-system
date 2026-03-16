<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PQC Migration Monitoring Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

<div>
    {{-- --- navbar --- --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar scroll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Link
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Link</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

</div>

<body>
    @php($hideChrome = View::hasSection('no_chrome'))

    <div>
        {{-- --- main content --- --}}
        <main>
            @yield('content')
        </main>
    </div>

    {{-- --- footer --- --}}
    <div>
    <footer class="bg-dark text-light pt-5 pb-4">

    <div class="container text-md-left">

    <div class="row text-md-left">

    <!-- Company -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">MyWebsite</h5>
    <p>
    A modern website built using Bootstrap. Clean, responsive and easy to use layout.
    </p>
    </div>

    <!-- Links -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links</h5>

    <p>
    <a href="#" class="text-light text-decoration-none">Home</a>
    </p>

    <p>
    <a href="#" class="text-light text-decoration-none">About</a>
    </p>

    <p>
    <a href="#" class="text-light text-decoration-none">Services</a>
    </p>

    <p>
    <a href="#" class="text-light text-decoration-none">Contact</a>
    </p>

    </div>

    <!-- Contact -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">

    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>

    <p>
    <i class="bi bi-house"></i> Kuala Lumpur, Malaysia
    </p>

    <p>
    <i class="bi bi-envelope"></i> email@example.com
    </p>

    <p>
    <i class="bi bi-phone"></i> +60 12 345 6789
    </p>

    </div>

    <!-- Social -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">

    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Follow us</h5>

    <a class="btn btn-outline-light btn-floating m-1" href="#">
    <i class="bi bi-facebook"></i>
    </a>

    <a class="btn btn-outline-light btn-floating m-1" href="#">
    <i class="bi bi-twitter"></i>
    </a>

    <a class="btn btn-outline-light btn-floating m-1" href="#">
    <i class="bi bi-github"></i>
    </a>

    <a class="btn btn-outline-light btn-floating m-1" href="#">
    <i class="bi bi-linkedin"></i>
    </a>

    </div>

    </div>

    <hr class="mb-4">

    <!-- Copyright -->
    <div class="row align-items-center">

    <div class="col-md-7 col-lg-8">

    <p>
    Copyright © 2026
    <a href="#" class="text-warning text-decoration-none">
    <strong>MyWebsite</strong>
    </a>
    </p>

    </div>

    </div>

    </div>

    </footer>
    </div>
</body>

</html>

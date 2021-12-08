<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
<header class="container-fluid py-2 pt-4" style="height: 10vh;">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand h1" href="/">INTEGRALES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/multiples">Integrales Multiples</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/superficie">Integrales de Superficie</a>
                    </li>
                        <a class="nav-link active " href="#">Integrales de Linea</a>
                    </li>
                </ul>
                <form class="d-flex">
                @if (Route::has('login'))
                <div class="me-auto mb-2 mb-lg-0  ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bt mr-4">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bt mr-4">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bt ml-4">Register</a>
                            @endif
                    @endauth
                </div>
            @endif
                </form>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row pb-5">
        <div class="row">
            <div class="h1 justify-content-center d-flex">INTEGRALES DE LINEA</div>
        </div>
        <div class="row">
            <div class="justify-content-center d-flex" style="height: 350px">
                <img src="img/imagen-linea.png" alt="">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="container-fluid mb-5">
            <div class="h2 text-danger">
                Concepto
            </div>
            <p>
            una integral de línea es aquella integral cuya función a integrar es evaluada sobre una curva. Los términos integral de curva, integral curvilínea e integral de trayectoria también son usados; integral de contorno también es usado aunque este término es típicamente usado para integrales de línea en el plano complejo.
            </p>
            <p>
            La función a ser integrada puede ser un campo escalar o un campo vectorial, también llamadas función escalar y función vectorial respectivamente.
            </p>
        </div>
        <hr>
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-sm-8">
                    <div class="h2 mb-5 text-danger">
                    Integral de línea de un campo escalar
                    </div>
                    <blockquote><p class="h3 mx-5">Definición</p></blockquote>
                    <p class="mx-5">
                    Sea <img src="img/linea-1-1.png" alt=""> una curva suave a trozos parametrizada por una función <img src="img/linea-1-2.png" alt="">, si  es un campo escalar continuo, la integral de línea del campo escalar f sobre C (también llamada integral de trayectoria), está definida como
                    </p>
                    <img class="mx-5" src="img/linea-1-3.png" alt="">
                    <p class="mx-5">
                    La función <img src="img/linea-1-4.png" alt=""> es una parametrización biyectiva arbitraria de C donde r(a) y r(b) son los puntos iniciales y finales respectivamente.
                    </p>
                    <p class="mx-5">
                    En particular, cuando f=1 entonces obtenemos la longitud de la curva C, esto es
                    </p>
                    <img class="mx-5" src="img/linea-1-5.png" alt="">
                    <p class="mx-5">
                    Las integrales de línea de campos escalares son independientes de la parametrización de C porque solo depende de la longitud del arco y lo son también de la orientación de C, esto es, si C es una curva simple orientada y -C denota la misma curva pero con orientación opuesta entonces
                    </p>
                    <img class="mx-5" src="img/linea-1-6.png" alt="">
                </div>
                <div class="col-sm-4 ">
                    <div class="h2 text-danger">Ejemplo</div>
                    <div class="justify-content-center">
                        <img src="img/linea-ejer-1.png" alt="" style="height: 500px">
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-sm-8">
                    <div class="h2 mb-5 text-danger">
                    Integral de línea de un campo escalar
                    </div>
                    <blockquote><p class="h3 mx-5">Definición</p></blockquote>
                    <p class="mx-5">
                    Sean <img src="img/linea-2-1.png" alt=""> un campo vectorial continuo en una región <img src="img/linea-2-2.png" alt=""> una curva suave a trozos parametrizada por una función <img src="img/linea-2-3.png" alt="">, la integral de línea del campo vectorial F sobre C en la dirección de r, está definida como
                    </p>
                    <img class="mx-5" src="img/linea-2-4.png" alt="">
                    <p class="mx-5">
                    donde . es el producto escalar y la función <img src="img/linea-2-5.png" alt=""> es una parametrización biyectiva arbitraria de C donde r(a) y r(b) son los puntos iniciales y finales respectivamente.
                    </p>
                    <p class="mx-5">
                    Las integrales de línea de campos vectoriales sólo son independientes de la parametrización de C, no son independientes de la orientación de C, para este tipo de integrales, si C es una curva simple orientada y -C denota la misma curva pero con orientación opuesta entonces
                    </p>
                    <img class="mx-5" src="img/linea-2-6.png" alt="">
                </div>
                <div class="col-sm-4 ">
                    <div class="h3 text-danger">Relación con las integrales de línea de campos escalares</div>
                    <div class="justify-content-center">
                        <img src="img/linea-ejer-2-1.png" alt="" style="height: 450px">
                    </div>

                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="#">Everl.com</a>
    </div>
    <!-- Copyright -->
</footer>

<!-- Bootstrap -->
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

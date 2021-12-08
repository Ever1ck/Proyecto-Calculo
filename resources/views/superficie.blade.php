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
                        <a class="nav-link active " href="#">Integrales de Superficie</a>
                    </li>
                        <a class="nav-link" href="/linea">Integrales de Linea</a>
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
            <div class="h1 justify-content-center d-flex">INTEGRALES DE SUPERFICIE</div>
        </div>
        <div class="row">
            <div class="justify-content-center d-flex" style="height: 350px">
                <img src="img/superficie-1.png" alt="">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class=" mb-5">
            <div class="h2 text-danger">
                Introduccion
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                    <p>
                        En integrales de superficie la región o dominio de integración es una superficie, en general del espacio R3. El presente resumen es una selección de las principales aplicaciones y las formas de cálculo. En las Notas de Clase, se adjuntan los conceptos en forma completa.     
                    </p>
                    </div>
                    <div>
                        <div class="h4 text-danger px-3">
                        Superficies S
                        </div>
                        <p class="px-3">
                            En integrales de superficie la región o dominio de integración es una superficie, en general del espacio R3. El presente resumen es una selección de las principales aplicaciones y las formas de cálculo. En las Notas de Clase, se adjuntan los conceptos en forma completa.     
                        </p>
                        <div class="h5 text-danger px-5">
                        Representación implícita
                        </div>
                        <p class="px-5">
                        Conjunto de puntos (x,y,z) que satisfacen una ecuación de la forma F(x,y,z) = 0. La que será muy utilizada en este curso
                        </p>
                        <div class="h5 text-danger px-5">
                        Representación explícita
                        </div>
                        <p class="px-5">
                        Cuando es posible despejar una de las coordenadas en función de las otras dos, por ejemplo z en función de x e y, obtenemos una (o varias) ecuación de la forma z = f(x,y).
                        </p>
                        <div class="h5 text-danger px-5">
                        Representación paramétrica o vectorial
                        </div>
                        <p class="px-5">
                        por medio de ecuaciones que expresan las variables en función de parámetros.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 justify-content-center  my-auto">
                    <img class="mw-100" src="img/Ejemplo-1-Su.png" alt="" style="height: 250px">
                </div>
            </div>
        </div>
        <hr>
        <div class=" mb-5">
            <div class="row">
                <div class="">
                    <div class="h2 text-danger">
                    Definicion
                    </div>
                    <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                    <p>
                    Si entiendes las integrales dobles, y entiendes cómo calcular el área de superficie de una superficie paramétrica, prácticamente ya entiendes las integrales de superficie. Solo es cuestión de juntar las dos ideas intuitivas. Dentro de poco veremos el cálculo de integrales de superficie con un ejemplo, pero primero, pienso que es importante que tengas una buena idea de lo que una integral de superficie hace exactamente.
                    </p>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid mb-5">
            <div class="h2 mb-4 text-danger">
            Cómo calcular integrales de superficie
            </div>
            <!-- Ejemplo 1-->
            <div class="row mb-5">
                <div class="col-8">
                    <div class="container-fluid">
                        <div class="pb-2">
                            <p>La notación abstracta y visiones de cortar el ala de un avión están bien y funcionan, ¿pero de qué manera calculas una de estas integrales de superficie? El truco consiste en convertirla sigilosamente en una integral doble, plana, común.</p>
                    
                            <div class="row">
                                <div class="col">Específicamente, la manera en la que tiendes a representar una superficie matemáticamente es con una función paramétrica. Tendrás una función vectorial \vec{\textbf{v}}(t, s) 
v
 (t,s)start bold text, v, end bold text, with, vector, on top, left parenthesis, t, comma, s, right parenthesis, que toma puntos en el plano de dos dimensiones tstst, s (hermoso y plano), y dé como valores de salida puntos en un espacio de tres dimensiones. También necesitas especificar la región TTT del plano tstst, s que se proyecta sobre la superficie SSS.</div>
                                <div class="col">
                                <img src="img/Como-sup.svg" alt="">
                                </div>
                                <div>
                                    El truco para las integrales de superficie es, entonces, encontrar una manera de integrar sobre la región plana TTT que tiene el mismo efecto que integrar sobre una superficie curva SSS. Esto requiere describir lo que significa un "pedazo pequeño de área" de SSS en términos de algo dentro del parámetro.
                                </div>
                                <div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="justify-content-center">
                        <img src="img/Ejemplo1.jpg" alt="" style="height: 200px">
                    </div>
                </div>
            </div>
            <!-- Ejemplo 2-->
        </div>
        <hr>
        <div class="container-fluid mb-5">
            <div class="h2 mb-4 text-danger">
                Ejercicios
            </div>
            <!-- Ejercicio 1-->
            <div class="row mb-5">
                <div class="col-7 ">
                    <div class="container-fluid py-3">
                        <div class="h3 text-danger pb-2">
                            Ejercicio 1
                        </div>
                        <img src="img/Mul-Eje1.png" alt="">
                        <img src="img/Mul-ejerci1-2.png" alt="">
                        <img src="img/mul-ejer-1-3.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Ejercicio 2-->
            <div class="row mb-5">
                <div class="col-7 ">
                    <div class="container-fluid py-3">
                        <div class="h3 text-danger pb-2">
                            Ejercicio 2
                        </div>
                        <img src="img/mul-ejer-2-1.png" alt="">
                        <img src="img/mul-ejer-2-2.png" alt="">
                    </div>
                </div>
                <div class="col-5">
                    <div class="">
                        <img src="img/P-Ejercicio2.PNG" alt="" style="height: 200px">
                    </div>
                </div>
            </div>
        </div>
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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Style CSS -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" />

    <title>{{$title}}</title>
</head>

<body>

    <section id="navigation" class="navigation">
        {{-- <div class="container-fluid"> --}}
        <nav class="navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand" href="/">
                <img src="/img/BaltHIV-logo.png" width="160px" height="80" alt="">
            </a>
            <div class="navbar-toggler-right"></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">


                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
                  <a class="nav-link" href="#">Sākums <san class="sr-only">(current)</san></a>
                </li> -->
            <li class="nav-item active {{Request::path()=== '/news' ? 'nav-item:hover' : ''}}">
                        <a class="nav-link " href="/news">Jaunumi <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active {{Request::path()=== '/pakalpojumi' ? 'current_page_item' : ''}}">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pakalpojumi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Konsultācija</a>
                            <a class="dropdown-item" href="#">HIV testēšana</a>
                            <a class="dropdown-item" href="#">Lekcijas</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resursi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Statistikas dati</a>
                            <a class="dropdown-item" href="#">Vadlīnijas</a>
                            <a class="dropdown-item" href="#">Informatīvi materiāli</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="#">Projekti <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Par mums
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Valde</a>
                            <a class="dropdown-item" href="#">Statūti</a>
                            <a class="dropdown-item" href="#">Gada pārskati</a>
                            <a class="dropdown-item" href="#">Pievienojies</a>
                            <a class="dropdown-item" href="#">Kontakti</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="/contacts">Kontakti <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <!-- <form class="form-inline">
                      <button id="ziedo" class="btn btn-outline-danger" type="button">ZIEDO</button>

                    </form> -->
            </div>



        </nav>


        @yield('my_content')

        <section class="bottom">
            {{-- <div class="container"> --}}
                <div class="row bottom_footer center-block">
                    <a href="https://www.facebook.com/balthiv/"><i class="fa fa-facebook-f social_footer"></i></a>
                    <a href="#"><i class="fa fa-twitter social_footer"></i></a>
                    <a href="#"><i class="fa fa-instagram social_footer"></i></a>
                    <a href="#"><i class="fa fa fa-envelope social_footer"></i><a>

                </div>
                <p class="text-center">&#169 2019, BaltHIV</p>
            {{-- </div> --}}
        </section>
        <button id="butTop" type="button" class="top"><i class="fa fa-angle-up"></i></button>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js">
        </script>
        <script src="/js/js.js"></script>
        <script>
            $.validate({
                form: '#forma',
                language: langLV,
                modules: 'toggleDisabled' //lai poga butu aktiva pec nosacijumu izpildisanas
            })

        </script>
</body>

</html>

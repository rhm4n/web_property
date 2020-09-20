<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @yield('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">


<title>@yield('title')</title>
</head>

<body>
    <!-- navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{asset('assets/image/logo3.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-4">
                        <li class="item">
                            <a class="link" href="#">DAFTAR MARKETING</a>
                        </li>
                        <li class="item">
                            <a class="link" href="/">BERANDA</a>
                        </li>
                        <li class="item">
                            <a class="link" href="#">PROJEK</a>
                        </li>
                        <li class="item">
                            <a class="link" href="#">PROFIL</a>
                        </li>
                        <button class=" link btn btn-outline-primary" type="button">LOGIN</button>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


@yield('content')


    <!-- footer -->

    <section>
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">

                    <div class="col-md-4">
                        <h5>Alamat Kantor</h5>
                        <hr class="line">
                        <p>Jl.H. Supuu Yusuf No.79</p>
                        <p>Kota Kendari</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Jam Kantor</h5>
                        <hr class="line">
                        <p>Senin-Jumat: 8am-4pm</p>
                        <p>Sabtu: 9am-3pm</p>
                        <p>Minggu: Tutup</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Kontak</h5>
                        <hr class="line">
                        <p>+6280-5555-5555</p>
                        <a class="email" href="#">alindra@gmail.com</a>
                    </div>

                </div>
            </div>
        </footer>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/9461b5b9a1.js"></script>

</body>

</html>
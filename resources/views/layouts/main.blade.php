<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kominfo</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div id="particles-js"></div>
    @include('partials.navbar')
    <div class="container mt-4" style="min-height :100vh; padding-top: 70px;">
        @yield('container')
    </div>

    <!--footer-->
    <footer class="bg-dark text-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><b>Address:</b> Jl. DR. Soetomo No.1, Dukuh Ringin, Dukuhwringin, Kec. Slawi, Kabupaten Tegal, Jawa Tengah 52415</li>
                        <li><b>Phone:</b> 02834561555</li>
                        <li><b>Email:</b> kominfo[at]tegalkab.go.id</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5 class="mb-4" style="color: #ffffff">Media Sosial</h5>
                    <ul class="list-unstyled">
                        <li><a class="btn btn-link" href="https://www.facebook.com/KominfoTegalkab" target="_blank" style="color: #ffffff"><i class="fab fa-facebook"></i> Facebook</li></a>
                        <li><a class="btn btn-link" href="https://twitter.com/kominfokabtegal" target="_blank" style="color: #ffffff"><i class="fab fa-twitter"></i> Twitter</li></a>
                        <li><a class="btn btn-link" href="https://www.youtube.com/@DiskominfoKabTegal" target="_blank" style="color: #ffffff"><i class="fab fa-youtube"></i> YouTube</li></a>
                        <li><a class="btn btn-link" href="https://www.instagram.com/kominfo_tegalkab/" target="_blank" style="color: #ffffff"><i class="fab fa-instagram"></i> Instagram</a>
                    </ul>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        &copy; Diskominfo Kabupaten Tegal. Develop By SYAA. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
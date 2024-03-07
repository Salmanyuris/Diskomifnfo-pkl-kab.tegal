<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar {
            background: linear-gradient(to right, #2f5d91, #4e6e93);
            color: #fff;
            padding: 20px;
            height: 100vh;
        }

        .sidebar h1 {
            font-size: 24px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            text-decoration: none;
            color: #ccc;
        }

        .sidebar .active {
            font-weight: bold;
        }

        .sidebar .logout-admin {
            position: absolute;
            bottom: 0;
            left: 20px;
        }

        @media screen and (max-width: 768px) {
            .sidebar {
                height: auto;
                padding-bottom: 60px;
         
            }

            .sidebar .logout-admin {
                position: static;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 sidebar fixed-left">
                <h1 class="rounded-end-circle">DASHBOARD</h1>
                <a href="{{ route('homeadmin') }}" class="active mt-4 ">Home</a>
                <a href="{{ route('penerimaan') }}" class="mt-4">Info Penerimaan</a>
                <form class="logout-admin m-3" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="mt-4 border rounded-lg bg-light text-dark">Logout</button>
                </form>
            </div>
            <div class="container mt-4 col-9" style="padding-top: 70px;">
                @yield('content')
            </div>
        </div>
    </div>

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

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
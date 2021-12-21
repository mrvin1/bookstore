<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
        * {
            font-family: sans-serif;
        }
        .header {
            padding: 0%;
            margin: 0;
            background-color: rgba(252, 186, 3);
            font-size: 25px;

        }

        .footer {
            display: flex;
            flex-direction: column;
            background-color: rgba(252, 186, 3);

        }
        .navbar-login{
            text-decoration: none;
            padding-right: 1vw;
            color: black;
        }

    </style>

</head>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<body>
    <div class=header>
        <nav class="navbar navbar-expand-lg navbar-light mr-md-0">
            <div class=navbar-head style="background-color: #rgba(252, 186, 3);">
                <a class="navbar-brand" href="/" style="color: blACK; font-size:2vw">
                    Book Store
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-right:3%; font-size: 1.5vw;">
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Manage
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Book</a>
                          <a class="dropdown-item" href="#">Genre</a>
                          <a class="dropdown-item" href="#">User</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Hello, Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Change Password</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    

</body>

@yield('contents')

</footer>

<div class="footer text-center">
    <div class="text-center text-dark p-3" style="background-color: rgba(252, 186, 3);">
        © 2021 Copyright:
        <a class="text-dark"  href="\">Patricia C.K.& Vincent F.W.</a>
    </div>
</div>

</footer>
</html>

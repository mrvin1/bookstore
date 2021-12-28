<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    .content{
        background-color: rgb(255, 233, 171);
        padding:2vw; 

    }

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
    .form{
        background-color: rgb(255, 233, 171); 
        padding:1vw 5vw 0vw 5vw ; 
    }
    .form-group{
        background-color: rgb(255, 233, 171); 
    }

</style>

<title>Profile</title>
@if(Auth::user()->role ==='admin')
    {{-- @extends('admin-layout')  --}}
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
@elseif(Auth::user()->role ==='member')
    {{-- @extends('member-layout') --}}
    
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
            <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-right:3%; font-size: 1.5vw;" >
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item active" >
                        <a class="nav-link" href="#">View Cart</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">View Transaction History</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  style="font-size: 1.5vw; aria-haspopup="true" aria-expanded="false">
                          Hello, Member
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
    
    
@endif

<div class="form">

    <h2>Profile</h2>
    <form action="/profile" method="POST">
    @csrf
    <div class="form-group row">
        <label for="input" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="input" placeholder="Name" name="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->email}}">
        </div>
    </div>
    <div class="button" style="padding-top: 1vw;padding-bottom: 1.5vw;">
        
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-primary">Change Password</button>
    </div>
    </form>
    
</div>



</footer>

<div class="footer text-center">
    <div class="text-center text-dark p-3" style="background-color: rgba(252, 186, 3);">
        © 2021 Copyright:Patricia C.K.& Vincent F.W.

    </div>
</div>

</footer>
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
    .card-body{
        background-color: rgb(255, 233, 171); 
    }

</style>
<title>Change Password</title>

@if(Auth::user()->role ==='admin')
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
                                <a class="dropdown-item" href="{{route('managebook')}}">Book</a>
                                <a class="dropdown-item" href="{{route('genre')}}">Genre</a>
                                <a class="dropdown-item" href="{{route('manageuser')}}">User</a>
    
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Hello, Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                                <a class="dropdown-item" href="{{route('changepassword')}}">Change Password</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
    
    </body>
@elseif(Auth::user()->role ==='member')
    
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
                        <a class="nav-link" href="{{route('viewcart')}}">View Cart</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">View Transaction History</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  style="font-size: 1.5vw; aria-haspopup="true" aria-expanded="false">
                          Hello, Member
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                            <a class="dropdown-item" href="{{route('changepassword')}}">Change Password</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    

</body>
    
@endif

<div class="card-body" style=" padding: 2% 20% 2% 20%">
    <h3 class="card-title text-center">Change password</h3>
            
    <div class="card-text">
        <form method="POST" action="/changepassword">
            @csrf
            <div class="form-group" style="display: flex;">
                <label for="exampleInputEmail1" style="width:25%">Old password</label>
                <input type="password" class="form-control form-control" name="old" required>
            </div>
            <div class="form-group" style="display: flex">
                <label for="exampleInputEmail1" style="width:25%">new password</label>
                <input type="password" class="form-control form-control" name="new" required>
            </div>
            <div class="form-group" style="display: flex">
                <label for="exampleInputEmail1" style="width:25%">New Confirmation Password</label>
                <input type="password" class="form-control form-control" name="confirm" required>
            </div>
            <button type="submit" style="width:100%" class="btn btn-primary btn-block submit-btn">Update</button>
        </form>
    </div>
</div>

</footer>

<div class="footer text-center">
    <div class="text-center text-dark p-3" style="background-color: rgba(252, 186, 3);">
        © 2021 Copyright:Patricia C.K.& Vincent F.W.
    </div>
</div>

</footer>
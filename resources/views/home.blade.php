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

</style>
<title>Home</title>

@if(Auth::guest())
    {{-- @extends('layout-log-reg') --}}

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
            <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-right:3%">
                <ul class="navbar-nav ml-auto" >
                    <a class="navbar-login" href="">Register</a>
                    <a class="navbar-login" href="">Login</a>
                </ul>
            </div>
        </nav>
    </div>

@elseif(Auth::user()->role ==='admin')
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

<div class="content" >
    <form class="form-inline" method="POST" action="/home">
        @csrf
        <input class="form-control mr-sm-3" style="width: 90%"; type="search" placeholder="Search" aria-label="Search" name="search" id="search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form action="/home" method="GET">
        <button type="submit" style="margin-top: 1vw; margin-bottom: 3vw"  class="btn btn-primary" name="clear">Clear Filter</button> 
    </form>
   
   
    <div class="row max auto" style="margin-left:3vw; margin-right:3vw" >
        @forelse ($book as $idx => $value)
        <div class="card" style="width: 15rem; margin-left:1vw; margin-bottom:1vw ">
            <img class="card-img-top" src="{{url('/storage/'. $book[$idx]->cover)}}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title">{{$book[$idx]->name}}</h3><br>
                <p class="card-text">{{$book[$idx]->author}}</p>
                <p class="card-text">Rp. {{$book[$idx]->price}}</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
        @empty
            No Book...
        @endforelse
        </div>
    {{$book->links()}} 
    </div>

    
{{-- @endsection --}}

</footer>

<div class="footer text-center">
    <div class="text-center text-dark p-3" style="background-color: rgba(252, 186, 3);">
        © 2021 Copyright:
        <a class="text-dark"  href="\">Patricia C.K.& Vincent F.W.</a>
    </div>
</div>

</footer>
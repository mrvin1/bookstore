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
<title>Book Detail</title>
@if(Auth::guest())
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
                    <a class="navbar-login" href="{{route('register')}}">Register</a>
                    <a class="navbar-login" href="{{route('login')}}">Login</a>
                </ul>
            </div>
        </nav>
    </div>

<div class="content" > 
    <h1 class="text-center">  {{$book->name}}  Book Detail </h1> 
    <div class="container-fluid" style="background-color: rgb(255, 233, 171); ">
        <div class="row justify-content" >
            <div class="col-md-4" style="padding-top: 2vw; padding-left: 10%;">

                <img style="width: 100%;" src="{{url('/storage/'. $book->cover)}}" alt="">
            </div>  
            <div class="col-md-7"> 
                <div class="detailContent" style="font-size: 18px;padding:1.5rem; ">
                    <p> Title: 
                        {{$book->name}}
    
                    </p><br>
                    <p> Author: 
                        {{$book->author}}
                    </p><br>
                    <p> Synopsis: <br>
                        {{$book->synopsis}}
                    </p><br>
                    <p> Genre(s): 
                        @forelse ($book->genre as $idy =>$value )
                            {{$book->genre[$idy]->name}}, 
                        @empty
                            no genre
                        @endforelse
                    </p><br>
                    <p> Price: Rp.
                        {{$book->price}}
                    </p><br>

                </div>
            </div>
        </div>  
    </div>
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
<div class="content" > 

    <h1 class="text-center"> {{$book->name}} Book Detail </h1>  
         
    <div class="container-fluid">
    <div class="row justify-content" >
        <div class="col-md-12"> 
            
            <form method="POST" action="/bookdetail/{{$book->id}}" enctype="multipart/form-data">
                @csrf
                <div class="Book-Title">
                    <label for="BookTitle">Title</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$book->name}}" required >
                </div>
                <div class="Book-Author">
                    <label for="Author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{$book->author}}" required >
                </div>
                
                <div class="Book-Synopsis">
                    <label for="Synopsis">Synopsis</label>
                    <textarea class="form-control" id="synopsis" name="synopsis" rows="10" required >{{$book->synopsis}}</textarea>
                </div>
                <br>
                <div class="Book-Genre">
                    <label for="Synopsis">Genre(s):</label> 
                    
                    @forelse ($book->genre as $idy =>$value )
                    {{$book->genre[$idy]->name}}, 
                    @empty
                        no genre
                    @endforelse 
                    <br>
                    @forelse ($genre as $idx=>$value)
                    <input type="checkbox" class="checkbox" id="=genre[]" name="genre[]" value="{{$genre[$idx]->id}}">
                    {{$genre[$idx]->name}}      
                    
                    @empty
                    no genre data
                    @endforelse
                    <p class="text-danger">Please check the Genre(s) before updating</p>
                    </div>
                    <div class="form-group">
                        <label for="Author">Price</label>
                        <input type="number" class="form-control" name="price" id="price" value="{{$book->price}}" required >
                    </div>
                    
                    <div class="book-image" style="display: flex; flex-direction: row;">
                        <label for="cover">Book Cover:</label>
                        <img style="width: 35%; padding-left: 5vw; padding-right: 5vw" src={{url('/storage/'. $book->cover)}} alt="">
                        <input style="padding-top: 17%" type="file" name="cover" id="cover" >
                    </div>
                    
                    <div class="submit" style="padding-top: 1vw">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form> 
                
                @error('cover')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
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
                        <a class="nav-link" href="{{route('viewcart')}}">View Cart</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('transactionhist')}}">View Transaction History</a>
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
<div class="content" > 
    <h1 class="text-center">   {{$book->name}}     Book Detail </h1> 
            <div class="container-fluid" style="background-color: rgb(255, 233, 171); ">
                <div class="row justify-content" >
                    <div class="col-md-4" style="padding-top: 2vw; padding-left: 10%;">
            <img style="width: 100%;" src="{{url('/storage/'. $book->cover)}}" alt="">
        </div>  
        <div class="col-md-7"> 
            <div class="detailContent" style="font-size: 18px;padding:1.5rem; ">
                <p> Title: 
                    {{$book->name}}
                   
                </p><br>
                <p> Author: 
                    {{$book->author}}
                </p><br>
                <p> Synopsis: <br>
                    {{$book->synopsis}}
                   
                </p><br>
                <p> Genre(s): 
                    @forelse ($book->genre as $idy =>$value )
                        {{$book->genre[$idy]->name}}, 
                    @empty
                        no genre
                    @endforelse

                </p><br>
                <p> Price: Rp.
                    {{$book->price}}
    
                </p><br>
                
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Quantity</span>
                    </div>
                    <form action="/addcart/{{$book->id}}" method="POST">
                        @csrf
                        <input type="number" class="form-control" min="1" name="amount" required  >
                    </div>
                        <button class="btn btn-primary" type="submit">Add to cart</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>


@endif

@section('title', 'Book Details')

</footer >
    <div class="footer text-center">
        <div class="text-center text-dark p-3" style="background-color: rgba(252, 186, 3);">
            © 2021 Copyright:Patricia C.K.& Vincent F.W.
        </div>
    </div>
  
</footer> 

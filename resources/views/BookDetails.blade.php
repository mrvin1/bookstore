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
@else 
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
    
@endif

@section('title', 'Book Details')

{{-- @section('contents') --}}

<div class="content" > 
    


<h1 style="margin-left: 10%">   {{-- {{$title->title}}   --}}  Harry Potter and the Philosopher's Stone  Book Detail </h1> 
  
     
<div class="container-fluid">
<div class="row justify-content" >
    <div class="col-md-12"> 
        
        <form method="POST">
            @csrf
            <div class="Book-Title">
                <label for="BookTitle">Title</label>
                <input type="text" class="form-control" id="name" name="name" required >
            </div>
            <div class="Book-Author">
                <label for="Author">Author</label>
                <input type="text" class="form-control" id="author" name="author" required >
            </div>
            
            <div class="Book-Synopsis">
                <label for="Synopsis">Synopsis</label>
                <textarea class="form-control" id="synopsis" name="synopsis" rows="10" required></textarea>
            </div>
            <div class="Book-Genre">
                <label for="Synopsis">Genre(s)</label> 
                {{-- @forelse ($genre as $idx=>$value)
                    <input type="checkbox" class="checkbox" id="=genre[]" name="genre[]" value="{{$genre[$idx]->id}}">
                    {{$genre[$idx]->name}}
                    @empty
                    no genre data
                    @endforelse --}}
                    
                </div>
                <div class="form-group">
                    <label for="Author">Price</label>
                    <input type="number" class="form-control" name="price" id="price" required >
                </div>
                
                <div class="book-image" style="display: flex; flex-direction: row;">
                    <label for="cover">Book Cover:</label>
                    <img style="width: 35%; padding-left: 5vw; padding-right: 5vw" src={{Storage::url('1.jpg')}} alt="">
                    <input style="padding-top: 17%" type="file" name="cover" id="cover" required>
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

        
        
    {{-- @elseif (auth member) --}}
        
        {{--
            <h1 style="margin-left: 10%">   Harry Potter and the Philosopher's Stone  {{$title->title}}   Book Detail </h1> 
            <div class="container-fluid" style="background-color: rgb(255, 233, 171); ">
                <div class="row justify-content" >
                    <div class="col-md-4" style="padding-top: 2vw; padding-left: 10%;">
            <img style="width: 100%;" src="{{Storage::url('image/1.jpg')}}" alt="">
        </div>  
        <div class="col-md-7"> 
            <div class="detailContent" style="font-size: 18px;padding:1.5rem; ">
                <p> Title: 
                    {{$title->title}}
                     Harry Potter and the Philosopher's Stone 
                </p><br>
                <p> Author: 
                    {{$author->author}} 
                     J.K. Rowling
                </p><br>
                <p> Synopsis: <br>
                    {{$author->publisher}}
                    Ten-year-old Harry Potter is an orphan who lives in the fictional London suburb of Little Whinging, Surrey, 
                    with the Dursleys: his uncaring Aunt Petunia, loathsome Uncle Vernon, and spoiled cousin Dudley. 
                    The Dursleys barely tolerate Harry, and Dudley bullies him. One day Harry is astonished to receive a
                    letter addressed to him in the cupboard under the stairs (where he sleeps). Before he can open the letter, however,
                    Uncle Vernon takes it. Letters for Harry subsequently arrive each day, in increasing numbers, but Uncle Vernon tears
                    them all up, and finally, in an attempt to escape the missives, the Dursleys go to a miserable shack on a small island. 
                    On Harry’s 11th birthday, a giant named Hagrid arrives and reveals that Harry is a wizard and that he has been accepted
                    at the Hogwarts School of Witchcraft and Wizardry. He also sheds light on Harry’s past, informing the boy that his parents,
                    a wizard and a witch, were killed by the evil wizard Voldemort and that Harry acquired the lightning-bolt scar on his forehead during the fatal confrontation.
                </p><br>
                <p> Genre(s): 
                    {{$author->year}}
                    Fiction, Adventure, young Adult, fanatsy
                </p><br>
                <p> Price: Rp.
                    {{$author->description}}
                    300.000
                </p><br>
                
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Quantity</span>
                    </div>
                    <input type="text" class="form-control" >
                </div>
                
                <a class="btn btn-primary" href="#" role="button">Add to cart</a>   

            </div>
        </div>
    </div>  
</div>

--}}

    {{-- @else --}}
    
{{--
<h1 style="margin-left: 10%">  {{$title->title}}  Book Detail </h1> 
<div class="container-fluid" style="background-color: rgb(255, 233, 171); ">
    <div class="row justify-content" >
        <div class="col-md-4" style="padding-top: 2vw; padding-left: 10%;">

            <img style="width: 100%;" src="{{Storage::url('image/1.jpg')}}" alt="">
        </div>  
        <div class="col-md-7"> 
            <div class="detailContent" style="font-size: 18px;padding:1.5rem; ">
                <p> Title: 
                    {{$title->title}} 
                    Harry Potter and the Philosopher's Stone 
                </p><br>
                <p> Author: 
                    {{$author->author}}
                     J.K. Rowling
                </p><br>
                <p> Synopsis: <br>
                    {{$author->publisher}}
                    Ten-year-old Harry Potter is an orphan who lives in the fictional London suburb of Little Whinging, Surrey, 
                    with the Dursleys: his uncaring Aunt Petunia, loathsome Uncle Vernon, and spoiled cousin Dudley. 
                    The Dursleys barely tolerate Harry, and Dudley bullies him. One day Harry is astonished to receive a
                    letter addressed to him in the cupboard under the stairs (where he sleeps). Before he can open the letter, however,
                    Uncle Vernon takes it. Letters for Harry subsequently arrive each day, in increasing numbers, but Uncle Vernon tears
                    them all up, and finally, in an attempt to escape the missives, the Dursleys go to a miserable shack on a small island. 
                    On Harry’s 11th birthday, a giant named Hagrid arrives and reveals that Harry is a wizard and that he has been accepted
                    at the Hogwarts School of Witchcraft and Wizardry. He also sheds light on Harry’s past, informing the boy that his parents,
                    a wizard and a witch, were killed by the evil wizard Voldemort and that Harry acquired the lightning-bolt scar on his forehead during the fatal confrontation.
                </p><br>
                <p> Genre(s): 
                    {{$author->year}}
                    Fiction, Adventure, young Adult, fanatsy
                </p><br>
                <p> Price: Rp.
                    {{$author->description}}
                    300.000
                </p><br>

            </div>
        </div>
    </div>  
</div>
--}}
    {{-- @endif --}}
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
@extends('member-layout')

@section('title', 'EditCart')

@section('contents')
<style>
    .container-fluid{
        background-color: rgb(255, 233, 171); 
    }
    .col-md-4{
        padding-left: 10%;
    }
    img{
        width: 100%;
    }
</style>

<div class="container-fluid">
    <div class="row justify-content" >
        <div class="col-md-4" style="padding-top: 2vw">

            <h2>Book Title: {{$book->name}} </h2>
             
            <img src="{{url('/storage/'. $book->cover)}}" alt="">
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
                    <form action="/editcart/{{$book->id}}" method="POST">
                        @csrf
                        <input type="number" class="form-control" value="{{$cart}}" name="qty" required min="1">
                        <button type="submit" style="width:100%" class="btn btn-primary btn-block submit-btn">Update</button> 
                    </form>
                    
                </div>
                
                

            </div>
        </div>
    </div>  
</div>

@endsection
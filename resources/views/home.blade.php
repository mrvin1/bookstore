@if(Auth::user()->role ==='admin')
    @extends('admin-layout') 
@elseif(Auth::user()->role ==='member')
    @extends('member-layout')
@else 
    @extends('layout-log-reg')
@endif

@section('contents')
<style>
    .content{
        background-color: rgb(255, 233, 171);
        padding:2vw; 

    }

</style>

<div class="content" >
    <form class="form-inline">
        <input class="form-control mr-sm-3" style="width: 90%"; type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button type="button" style="margin-top: 1vw; margin-bottom: 3vw"  class="btn btn-primary">Clear Filter</button>
   
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

    
@endsection
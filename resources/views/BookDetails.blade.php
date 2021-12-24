{{-- if auth admin --}}
@extends('admin-layout')

{{-- if auth member 
@extends('member-layout')
else 
@extends('layout-log-reg') --}}

@section('title', 'Book Details')

@section('contents')
<style>
    .content{
        background-color: rgb(255, 233, 171);
        padding:2vw; 

    }

</style>

<div class="content" > 
    
    {{-- @if (auth admin) --}}

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
                    <img style="width: 35%; padding-left: 5vw; padding-right: 5vw" src={{Storage::url('image/1.jpg')}} alt="">
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

    
@endsection
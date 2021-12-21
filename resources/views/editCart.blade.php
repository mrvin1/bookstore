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

            <h2>Book Title:</h2>
               {{-- {{$title->title}} --}}
            <img src="{{Storage::url('image/1.jpg')}}" alt="">
        </div>  
        <div class="col-md-7"> 
            <div class="detailContent" style="font-size: 18px;padding:1.5rem; ">
                <p> Title: 
                    {{-- {{$title->title}} --}} Harry Potter and the Philosopher's Stone
                </p><br>
                <p> Author: 
                    {{-- {{$author->author}} --}}J.K. Rowling
                </p><br>
                <p> Synopsis: <br>
                    {{-- {{$author->publisher}} --}}
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
                    {{-- {{$author->year}} --}}Fiction, Adventure, young Adult, fanatsy
                </p><br>
                <p> Price: Rp.
                    {{-- {{$author->description}} --}}
                    300.000
                </p><br>
                
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Quantity</span>
                    </div>
                    <input type="text" class="form-control" >
                </div>
                
                <a class="btn btn-primary" href="#" role="button">Upadate</a>   

            </div>
        </div>
    </div>  
</div>

@endsection
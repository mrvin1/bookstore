@extends('member-layout')

@section('title', 'Cart')

@section('contents')
<style>
    .container-fluid{
        background-color: rgb(255, 233, 171); 
    }
    .table{
        margin: 5% 5% 3% 5%;

    }
    .total{
        padding-left: 12%;
        padding-bottom: 3%;
    }
</style>

<div class="container-fluid">
    <div class="row justify-content" >
        <div class="col-md-10">
            
            <table class="table table-striped" style="margin-left: 12%">  
                
                <thead>
                    <tr>
                        <th scope="col">Book Title</th>
                        <th scope="col">Book Author</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cart as $idx => $value )
                        <tr>
                            <td>{{$cart[$idx]->name}}</td>
                            <td>{{$cart[$idx]->author}}</td>
                            <td>{{$cart[$idx]->price}}</td>
                            <td>{{$cart[$idx]->qty}}</td>   
                            <td>{{$cart[$idx]->qty * $cart[$idx]->price}}</td> 
                            <td>
                                <a class="btn btn-primary" href="bookdetail/{{$cart[$idx]->id}}" role="button">view Detail</a>   
                                <a class="btn btn-primary" href="#" role="button">Edit</a> 
                                <form action="/viewcart" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" value="{{$cart[$idx]->id}}" name="del">Remove</button>
                                </form>  
                            </td>
                        </tr> 
                    @empty
                        empty cart
                    @endforelse
                </tbody>
            </table>
            <div class="total">
                <h4>Grand total: {{$gt}} IDR </h4>
                <form action="/" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Checkout</button> 
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
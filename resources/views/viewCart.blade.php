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
                    {{-- @foreach ($collection as $item) --}}
                    <tr>
                        <td>Book Title</td>
                        <td>Book Author</td>
                        <td>Price</td>
                        <td>Quantity</td>   
                        <td>Sub Total</td> {{-- price*qty --}}
                        <td>
                            <a class="btn btn-primary" href="#" role="button">view Detail</a>   
                            <a class="btn btn-primary" href="#" role="button">Edit</a>   
                            <button type="button" class="btn btn-danger">Remove</button>
                        </td>
                    </tr> 
                    {{-- @endforeach --}}
                </tbody>
            </table>
            <div class="total">
                <h4>Grand total: IDR </h4>
                {{-- CODE FOR SUM THE SUBTOTAL --}}

                <a class="btn btn-primary" href="#" role="button">Checkout</a>   
            </div>
        </div>
    </div>
</div>

@endsection
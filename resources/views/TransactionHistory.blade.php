@extends('member-layout')

@section('title', 'EditCart')

@section('contents')

<style>
    .container-fluid{
        background-color: rgb(255, 233, 171); 
    }
    form{
        background-color: rgb(255, 233, 171);
        padding: 5% 10% 5% 10%;
    }
    .form-group{
        font-size: 1.5vw;
    }
</style>
<div class="container-fluid">

    <h1 style="padding:3% 0% 1% 10%">Transaction List</h1>

    <div class="row justify-content" >
        <div class="col-md-10">
          
            <table class="table table-striped" style="margin-left: 12%">  
                
                <thead>
                    <tr>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($head as $idx => $value)
                        <tr>
                            <td>{{$head[$idx]->id}}</td>
                            <td>{{$head[$idx]->date}}</td>
                            <td>
                                <a class="btn btn-primary" href="/transactionhistdetail/{{$head[$idx]->id}}" role="button">view Transaction Detail</a>     
                            </td>
                        </tr> 
                    @empty
                        <td>
                            no transaction history
                        </td>
                        <td></td>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
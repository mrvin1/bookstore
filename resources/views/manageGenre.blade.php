@extends('admin-layout')

@section('title', 'ManageGenre')

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
    <form method="POST" action="/genre">
        @csrf
        <h1>Insert Genre Form</h1> <br>
        <div class="form-group">
            <label for="Name">Genre Name:</label>
            <input type="text" class="form-control" id="Name" name="name" required>
        </div>
        <input class="btn btn-primary" type="Submit" value="Insert">
    </form>

    <div class="row justify-content" >
        <div class="col-md-10">
            <table class="table table-striped" style="margin-left: 10%">
                <thead>
                    <tr>
                        <th scope="col">Genre Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $genre as $idx => $value)
                    <tr>
                        <td>{{$genre[$idx]->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="#" role="button">view Detail</a>
                            <form action="/genreDel" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" name="del" value="{{$genre[$idx]->name}}">Delete</button>
                            </form>
                        </td>
                    </tr> 
                    @empty
                        No genre!
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
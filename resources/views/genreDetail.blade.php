@extends('admin-layout')

@section('title', 'GenreDetail')

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
    <form>
        <h1>{{--genre name  --}}Genre Detail</h1> <br>
        <div class="form-group">
            <label for="Name">Genre Name:</label>
            <input type="text" class="form-control" id="Name" >
        </div>
        <input class="btn btn-primary" type="Submit" value="Update">
    </form>

    <h1 style="padding-left: 10%;">Book List</h1>

    <div class="row justify-content" >
        <div class="col-md-10">
          
            <table class="table table-striped" style="margin-left: 12%">  
                
                <thead>
                    <tr>
                        <th scope="col">Book Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($collection as $item) --}}
                    <tr>
                        <td>Title</td>
                        <td>
                            <a class="btn btn-primary" href="#" role="button">view Detail</a>     
                        </td>
                    </tr> 
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
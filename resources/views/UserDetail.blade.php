@extends('admin-layout')

@section('title', 'ManageUser')

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
        <h1>Member's User Detail</h1> <br>
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="Name" >
        </div>
        <div class="form-group">
            <label for="Email">Email address:</label>
            <input type="email" class="form-control" id="Email" >
        </div>
        <div class="form-group">
            <label for="Role">Role:</label>
            <select class="form-control" id="Role">
                <option>Admin</option>
                <option>Member</option>
            </select>
        </div>
        <input class="btn btn-primary" type="Update" value="Submit">
    </form>
</div>
    @endsection
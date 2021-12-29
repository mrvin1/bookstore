@extends('admin-layout')

@section('title', 'ManageUserDetail')

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
    <form method="POST" action="/userdetail/{{$user->id}}">
        @csrf
        <h1>Member's User Detail</h1> <br>
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="Name" name="name" 
             value="{{$user->name}}"
             required >
        </div>
        <div class="form-group">
            <label for="Email">Email address:</label>
            <input type="email" class="form-control" id="Email" name="email" 
            value="{{$user->email}}"
             required>
        </div>
        <div class="form-group">
            <label for="Role">Role:</label>
            <select class="form-control" id="Role" name="role" >
                <option value="{{$user->role}}" id="Role">{{$user->role}}</option>
                <option value="admin" id="Role">Admin</option>
                <option value="member" id="Role">Member</option>
            </select>
        </div>
        <input class="btn btn-primary" type="Submit" value="Update">
    </form>
</div>
    @endsection
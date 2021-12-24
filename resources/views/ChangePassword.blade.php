{{-- if auth admin --}}
@extends('admin-layout')
{{-- else  --}}
{{-- @extends('member-layout') --}}
@section('title', 'ChangePassword ')

@section('contents')
<style>
    .card-body{
        background-color: rgb(255, 233, 171); 
    }
</style>

<div class="card-body" style=" padding: 2% 20% 2% 20%">
    <h3 class="card-title text-center">Change password</h3>
            
    <div class="card-text">
        <form>
            <div class="form-group" style="display: flex;">
                <label for="exampleInputEmail1" style="width:25%">Old password</label>
                <input type="password" class="form-control form-control">
            </div>
            <div class="form-group" style="display: flex">
                <label for="exampleInputEmail1" style="width:25%">new password</label>
                <input type="password" class="form-control form-control">
            </div>
            <div class="form-group" style="display: flex">
                <label for="exampleInputEmail1" style="width:25%">New Confirmation Password</label>
                <input type="password" class="form-control form-control">
            </div>
            <button type="submit" style="width:100%" class="btn btn-primary btn-block submit-btn">Update</button>
        </form>
    </div>
</div>

@endsection
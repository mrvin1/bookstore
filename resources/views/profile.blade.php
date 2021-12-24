{{-- if auth admin --}}
@extends('admin-layout')
{{-- else  --}}
{{-- @extends('member-layout') --}}

@section('title', 'Profile')

@section('contents')
<style>
    form{
        background-color: rgb(255, 233, 171); 
        padding:1vw 5vw 0vw 5vw ; 
    }
    .form-group{
        background-color: rgb(255, 233, 171); 
    }
</style>
<form>
    <h2>Profile</h2>
    <div class="form-group row">
        <label for="input" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="input" placeholder="Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="member@example.com">
        </div>
    </div>
    <div class="button" style="padding-top: 1vw;padding-bottom: 1.5vw">

        <button type="button" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-primary">Change Password</button>
    </div>
</form>

@endsection

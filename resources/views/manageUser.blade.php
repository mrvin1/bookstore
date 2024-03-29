@extends('admin-layout')

@section('title', 'ManageUser')

@section('contents')    
    <div class="container-fluid" style="background-color: rgb(255, 233, 171)">
        <div class="row justify-content" >
            <div class="col-md-12">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $user as $idx => $value )
                        <tr>
                            <td>{{$user[$idx]->name}}</td>
                            <td>{{$user[$idx]->email}}</td>
                            <td>{{$user[$idx]->role}}</td>
                            @if($user[$idx]->role==='admin')
                            <td>
                                <a class="btn btn-primary" href="userdetail/{{$user[$idx]->id}}" role="button">view Detail</a>
                            </td> 
                            @else
                            <td>
                                <a class="btn btn-primary" href="userdetail/{{$user[$idx]->id}}" role="button">view Detail</a>
                                
                                <form action="/manageuser" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" value="{{$user[$idx]->email}}" name="delete" >Delete</button>
                                </form>
                            </td>
                            @endif
                        </tr> 
                        @empty
                            no user!
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
            
@endsection
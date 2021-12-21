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
                        {{-- @foreach ($collection as $item) --}}
                        <tr>
                            <td>Mark</td>
                            <td>Otto@mail.com</td>
                            <td>Role</td>
                            {{-- if role admin  --}}
                            {{-- <td>
                                <a class="btn btn-primary" href="#" role="button">view Detail</a>
                                
                            </td> --}}
                            {{-- else --}}
                            <td>
                                <a class="btn btn-primary" href="#" role="button">view Detail</a>
                                {{-- ref ke USERDETAIL.BLADE --}}
                                <button type="button" class="btn btn-danger">Delete</button>
                                
                            </td>
                        </tr> 
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
            
@endsection
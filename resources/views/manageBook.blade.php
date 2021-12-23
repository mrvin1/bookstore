@extends('admin-layout')

@section('title', 'ManageBook')

@section('contents')
<style>
    .container-fluid{

        background-color:  rgb(255, 233, 171);
    }
    form{
        padding: 5% 10% 5% 10% ;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content" >
        <div class="col-md-12"> 

            <form method="POST">
                @csrf
                <h1>Insert Book Form</h1>
                <div class="Book-Title">
                    <label for="BookTitle">Title</label>
                    <input type="text" class="form-control" id="name" name="name" required >
                </div>
                <div class="Book-Author">
                    <label for="Author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required >
                </div>
                
                <div class="Book-Synopsis">
                    <label for="Synopsis">Synopsis</label>
                    <textarea class="form-control" id="synopsis" name="synopsis" rows="10" required></textarea>
                </div>
                <div class="Book-Genre">
                    <label for="Synopsis">Genre(s)</label>
                    @forelse ($genre as $genre=>$value)
                        <input type="checkbox" class="checkbox" id="=genre" name="genre" value="{{$genre[$idx]->id}}">
                        {{$genre[$idx]->name}}
                    @empty
                        no genre data
                    @endforelse
                        
                </div>
                <div class="form-group">
                    <label for="Author">Price</label>
                    <input type="number" min="50000" class="form-control" id="Author" >
                </div>
                
                <div class="book-image">
                    <label for="book_image">Book Cover</label>
                    <input type="file" name="book_image" id="book_image">
                </div>
                
                <div class="submit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            
            <table class="table table-striped" style="background-color: rgb(255, 233, 171)">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Synopsis</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($collection as $item) --}}
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Synopsis</td>
                        <td>Genre</td>
                        <td>Price</td>
                        <td>
                            <a class="btn btn-primary" href="#" role="button">view Detail</a>
                            
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
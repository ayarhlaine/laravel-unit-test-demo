@extends('layout.master')

@section('content')
   <div class="row">
       <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h5>Authors: </h5>
                </div>
                <div class="col-md-6 text-right">
                    <a href="/authors/create" class="btn btn-success btn-sm">Add Author</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                                <tr>
                                    <td scope="row">{{$author->name}}</td>
                                    <td>{{$author->address}}</td>
                                    <td>
                                        <button class="btn btn-warning">Edit</button>
                                        <form action="/authors" method="post">
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            
                           
                        </tbody>
                    </table>
                </div>
            </div>
       </div>
   </div>
@endsection
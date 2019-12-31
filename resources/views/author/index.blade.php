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
            @if(session()->get('save-success'))
                <div class="alert alert-success">
                    {{ session()->get('save-success') }}
                </div>
            @endif
            @if(session()->get('update-success'))
                <div class="alert alert-success">
                    {{ session()->get('update-success') }}
                </div>
            @endif
            @if(session()->get('delete-success'))
                <div class="alert alert-success">
                    {{ session()->get('delete-success') }}
                </div>
            @endif
            @if(session()->get('delete-fail'))
                <div class="alert alert-danger">
                    {{ session()->get('delete-fail') }}
                </div>
            @endif
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
                            @if ($authors->count() > 0)
                                    @foreach ($authors as $author)
                                        <tr>
                                            <td scope="row">{{$author->name}}</td>
                                            <td>{{$author->address}}</td>
                                            <td>
                                                <a href="/authors/{{$author->id}}" class="btn btn-primary btn-sm">View</a>
                                                <a href="/authors/{{$author->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="/authors/{{$author->id}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            @else
                                 <tr>
                                     <td colspan="3">No Data</td>
                                 </tr>
                            @endif
                            
                            
                           
                        </tbody>
                    </table>
                </div>
            </div>
       </div>
   </div>
@endsection
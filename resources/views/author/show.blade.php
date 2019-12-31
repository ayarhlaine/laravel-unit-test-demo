@extends('layout.master')

@section('content')
   <div class="row">
       <div class="col-md-12">
           <h5>Author : Create</h5>
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="Author Name">Authro Name : </label>
                </div>
                <div class="col-md-4">
                      <p>{{$author->name}}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="Author Address">Authro Address : </label>
                </div>
                <div class="col-md-4">
                    <p>{{$author->address}}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <a href="/authors" class="btn btn-secondary-btn sm">Back</a>
                </div>
            </div>
       </div>
   </div>
@endsection
@extends('layout.master')

@section('content')
   <div class="row">
       <div class="col-md-12">
           <h5>Author : Edit</h5>
         <form action="/authors" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="Author Name">Authro Name : </label>
                </div>
                <div class="col-md-4">
                      <input type="text"
                        class="form-control" value="{{$author->name}}" name="name" id="" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="Author Address">Author Address : </label>
                </div>
                <div class="col-md-4">
                      <textarea 
                        class="form-control" name="address" id="" placeholder=""> {{$author->address}}</textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <a href="/authors" class="btn btn-secondary-btn sm">Cancel</a>
                </div>
                <div class="col-md-4 text-right">
                      <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
       </div>
   </div>
@endsection
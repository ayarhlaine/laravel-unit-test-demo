@extends('layout.master')

@section('content')
   <div class="row">
       <div class="col-md-12">
           <h5>Author : Create</h5>
           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         <form action="/authors" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="Author Name">Authro Name : </label>
                </div>
                <div class="col-md-4">
                      <input type="text"
                        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="Author Address">Authro Address : </label>
                </div>
                <div class="col-md-4">
                      <textarea 
                        class="form-control" name="address" id="" placeholder=""></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <a href="/authors" class="btn btn-secondary-btn sm">Cancel</a>
                </div>
                <div class="col-md-4 text-right">
                      <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
       </div>
   </div>
@endsection
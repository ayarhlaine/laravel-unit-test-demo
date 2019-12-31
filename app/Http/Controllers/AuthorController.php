<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('author.index')->with('authors',$authors);
    }
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('author.show')->with('author',$author);
    }
    public function create(Request $request)
    {
       return view('author.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => ''
        ]);
        
        Author::create($data);
        
        return redirect('/authors');
    }
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('author.edit')->with('author',$author);
    }
    public function update($id,Request $request)
    {
        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->address = $request->address;
        $author->save();
        return redirect('/authors');
    }
    public function destroy($id)
    {
        $author = Author::find($id);
        if(isset($author))
        {
            $author->delete();
            return redirect('/authors')->with('delete-success','User Deleted');
        }
        else {
            return redirect('/authors')->with('delete-fail','Fail User Delete');
        }
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controllers;
class PostsController extends Controller
{
    //
    public function index(){
    	return view('posts.index');
    }
    public function create(){
      return view('posts.create');
    }
    public function store(){
      dd(Request()->all());
      Post::create(['title','body']);
      return redirect('/');
    }
}

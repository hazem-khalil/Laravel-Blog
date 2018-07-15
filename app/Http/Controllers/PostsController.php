<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function show()
    {
    	return view('posts.show');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store() 
    {


    	// Create new post using post request

    	$post = new Post;

    	$post->title = request['title'];

    	$post->body = request['body'];

    	// Save it to database

    	$post->save();

    	// And then rediect to home page
   	
    	return Redirect('/');
    }
}

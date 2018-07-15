<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	dd(request()->all());
    	// Create a new post by using the request data
    	// Save it to the database
    	// Redirect to home page 
    }
}

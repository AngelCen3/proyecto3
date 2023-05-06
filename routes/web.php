<?php

// Import the Request class from the Illuminate\Http namespace to handle HTTP requests
use Illuminate\Http\Request;

// Import the Route class from the Illuminate\Support\Facades namespace to define routes
use Illuminate\Support\Facades\Route;

/*
Define HTTP request types and their corresponding route types in Laravel

Route::get    // Define a route that handles GET requests
Route::post   // Define a route that handles POST requests
Route::delete // Define a route that handles DELETE requests
Route::put    // Define a route that handles PUT requests
*/

// Define a route that handles a GET request to the root URL ("/")
Route::get('/', function () {
    // Return a view called "home" when this route is requested
    return view('home');
});

// Define a route that handles a GET request to the "/blog" URL
Route::get('blog', function(){
    // Create an array of posts
    $posts =[ 
        ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
        ['id'=>2, 'title'=>'Laravel', 'slug'=>'laravel']    
    ];
    // Return a view called "blog" and pass in the posts array as a parameter
    return view('blog',['posts' => $posts]);
});

// Define a route that handles a GET request to a URL that contains a "slug" parameter
Route::get('blog/{slug}', function($slug){
    // Simulate a database query for a post that matches the "slug" parameter
    $post = $slug;
    // Return a view called "post" and pass in the post variable as a parameter
    return view('post',['post'=>$post]);
});

/*
 Define a route that handles a GET request to the "/buscar" URL and takes a Request object as a parameter
Route::get'buscar', functionRequest $request
    Return all of the data in the Request object as a response
    return $request->all
*/

<?php
// Import the Request class from the Illuminate\Http namespace to handle HTTP requests
//en el archivo composer.json (App hace referencia a app)

//import PageController from controllersv
use App\Http\Controllers\PageController;

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
//asi se puede escribir 
//Route::get('/', [PageController:: class, 'home'])->name('home');


Route::controller(PageController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{slug}', 'post')->name('post');
});

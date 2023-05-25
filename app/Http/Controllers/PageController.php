<?php

//este es la ruta de este controlador
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{ //este archivo va a manejar 3 function or request
    public function home(Request $request)
    {
        //Aqui es donde se hace la busqueda 
        //dd($_REQUEST);  <-directo de php
        //dd($request->search); <- con framework laravel
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}%")
        ->latest()->paginate();
        // Return a view called "home" when this route is requested
        return view('home', ['posts' => $posts]);
        //ahora le damos un nombre a cada ruta y esto lo hacemos para hacer funcionar los botones ->name'home
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}

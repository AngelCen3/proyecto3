<?php

//este es la ruta de este controlador
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //este archivo va a manejar 3 function or request
    public function home()
    {
        // Return a view called "home" when this route is requested
        return view('home');
        //ahora le damos un nombre a cada ruta y esto lo hacemos para hacer funcionar los botones ->name'home
    }

    //listado de publicasiones
    public function blog()
    {
        //$posts = Post::get();
        //$post = Post::first();
        //$post = Post::find(25);
        //dd($post);

        $posts = Post::latest()->paginate();

        //dd($posts);

        return view('blog', ['posts' => $posts]);
    }
    public function post(Post $post)
    { 
        return view('post', ['post' => $post]);
    }
}

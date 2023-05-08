<?php

//este es la ruta de este controlador
namespace App\Http\Controllers;

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
    public function blog()
    {
        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
        ];

        return view('blog', ['posts' => $posts]);
    }
    public function post($slug)
    { // Return a view called "blog" and pass in the posts array as a parameter
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}

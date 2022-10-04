<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::all()->sortByDesc('created_at');

        return view('home', compact('posts'));
    }
}

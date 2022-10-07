<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Request $request){

        $post = Post::where('slug', $request->slug)->get();
        $post = $post[0];


        return view( 'guest.post', compact('post') );
    }

    public function search(Request $request) {

        $search = $request->data;

        $posts = Post::where('name', 'like', '%' . $search . '%')
                    ->orWhere('extract', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%')
                    ->orWhere('image', 'like', '%' . $search . '%')
                    ->orWhere('category', 'like', '%' . $search . '%')
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view( 'guest.posts', compact('search', 'posts') );
    }
}

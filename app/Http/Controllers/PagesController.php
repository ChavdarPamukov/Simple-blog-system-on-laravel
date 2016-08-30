<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();

        $tags = Tag::all();

        return view('pages/welcome')->with('posts', $posts)->with('tags', $tags);
    }
}
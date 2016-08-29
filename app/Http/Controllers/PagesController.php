<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();

        return view('pages/welcome')->with('posts', $posts);
    }

    public function getAbout(){
        $firstName = 'Blog';
        $lastName = 'System';
        $fullName = $firstName . " " . $lastName;
        return view('pages/about')->with("fullName", $fullName);
    }

    public function getContact(){
        return view('pages/contact');
    }
}
?>
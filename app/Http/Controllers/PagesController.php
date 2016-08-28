<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages/welcome');
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
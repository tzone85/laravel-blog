<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{
    public function getIndex(){
        #process variable data or params
        #talk to the model
        #recieve from the model
        #compile or process data from the model if needed
        #pass that data to the correct view

        $posts = Post::orderBy('updated_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts ($posts);
    }

    public function getAbout(){

        $first = 'Thando';
        $last = 'Mini';
        $fullname = $first." ".$last;
        $email = 'thando.mini@thandotec.co.za';

        //return view('pages.about')->with("fullname", $fullname);
        //return view('pages.about')->withFullname($fullname)->withEmail($email);

        $data = [];
        $data['email'] = $email;
        $data['first'] = $first;
        $data['last'] = $last;

        return view('pages.about')->withData($data)->withFullname($fullname);
    }

    public function getContact(){
        return view('pages.contact');
    }

}
<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        #process variable data or params
        #talk to the model
        #recieve from the model
        #compile or process data from the model if needed
        #pass that data to the correct view

        return view('pages.welcome');
    }

    public function getAbout(){

        $first = 'Thando';
        $last = 'Mini';
        $fullname = $first." ".$last;
        $email = 'thando.mini@thandotec.co.za';

        //return view('pages.about')->with("fullname", $fullname);
        return view('pages.about')->withFullname($fullname)->withEmail($email);
    }

    public function getContact(){
        return view('pages.contact');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){

        $pageTitle = 'Home';


        return view('home', compact('pageTitle'));
    }
    public function about_us(){


        $pageTitle = 'About us';


        return view('home', compact('pageTitle'));
    }
    public function services(){


        $pageTitle = 'Our Services';


        return view('home', compact('pageTitle'));
    }
    public function our_projects(){


        $pageTitle = 'Our Projects';


        return view('home', compact('pageTitle'));
    }
    public function blog(){

        $pageTitle = 'Our Blog';


        return view('home', compact('pageTitle'));
    }
    public function post(){


        $pageTitle = 'Post';


        return view('home', compact('pageTitle'));
    }
    public function contact_us(){


        $pageTitle = 'Contact us';


        return view('home', compact('pageTitle'));
    }
}

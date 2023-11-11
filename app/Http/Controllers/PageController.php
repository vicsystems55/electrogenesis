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


        return view('about');
    }
    public function services(){


        return view('services');
    }
    public function our_projects(){


        return view('projects');
    }
    public function blog(){


        return view('blog');
    }
    public function post(){


        return view('post');
    }
    public function contact_us(){


        return view('contact');
    }
}

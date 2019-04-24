<?php

namespace App\Controllers;

class PagesController
{

    public function home()
    {

       
        return view('index');
    }

    public function about()
    {

        $mimi = "Miracle";

        return view('about');
    }

    public function contact()
    {

        return view('contact');
    }
}

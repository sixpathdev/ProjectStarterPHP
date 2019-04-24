<?php

namespace App\Controllers;

class UsersController
{
    public function index()
    {
        //$users = App::get('database')->selectAll('mimi');

        return view('users', compact('users'));
    }
}
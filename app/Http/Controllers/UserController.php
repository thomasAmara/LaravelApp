<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //show register/create Form
    public function create() {
        return view('users.register');
    }

    //show login Form
    public function login() {
        return view('users.login');
    }
}

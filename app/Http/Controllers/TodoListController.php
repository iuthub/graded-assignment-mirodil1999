<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function getSignIn(){
        return view("signIn");
    }

    public function getRegister(){
        return view("register");
    }
}

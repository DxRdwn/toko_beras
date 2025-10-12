<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function account(){
        return view('account');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('landing');
    }
    public function article(){
        return view('pages.artikel');
    }

    public function events(){
        return view('pages.events');
    }
    public function product(){
        return view('pages.produk');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function contact(){
        return view('pages.contact');
    }
}

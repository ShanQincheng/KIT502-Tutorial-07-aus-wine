<?php

namespace App\Http\Controllers;

class MainPageController extends Controller
{
    public function index() {
        return view('main');
    }

    public function about() {
        return view('about');
    }

}
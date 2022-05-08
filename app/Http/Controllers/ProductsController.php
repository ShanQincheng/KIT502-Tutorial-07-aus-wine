<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $greeting = "G'day!";
        $message = "Laravel if fun";
        //return view ('products.index', compact('greeting', 'message'));
        //return view('products.index') -> with('greeting', $greeting) -> with('message', $message);

        $data = [
            '1. Product' => 'MacBook',
            '2. Product' => 'iPad'
        ];
        return view('products.index', compact('data'));
    }

    public function show($id) {
        // get id in the URL
        return $id;
    }
}

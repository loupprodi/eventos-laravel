<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatController extends Controller
{
    public function index()
    {
        return view('contact');
    }
}

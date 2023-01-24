<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function comic() {
        return view('comic');
    }

    public function dashboard() {
        return view('dashboard');
    }
}


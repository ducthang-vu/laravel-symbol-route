<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function index() {
        $date = date('d-m-y');
        return view('home', ['date' => $date]);
    }
}

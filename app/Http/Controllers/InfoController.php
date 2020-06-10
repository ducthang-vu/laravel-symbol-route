<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index() {
        $phone = '01234-567891';
        $address = 'Via PincoPallino 1/A';
        $email = 'myMail@mail.com';

        return view('info.info', compact('phone', 'address', 'email'));
    }
}

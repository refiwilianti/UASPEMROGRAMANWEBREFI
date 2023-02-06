<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kapalController extends Controller
{
    public function costumer()
    {
        return view('index');
    }

    public function costumer1()
    {
        return view('login');

    }

    public function costumer2()
    {
        return view('registrasi');
    }

}

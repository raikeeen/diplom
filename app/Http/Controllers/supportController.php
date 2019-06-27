<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class supportController extends Controller
{
    public function index(){


        return view('support');

    }
    public function post(){


        return redirect('/');

    }
}

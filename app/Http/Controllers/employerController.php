<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employerController extends Controller
{
    public function index()
    {
        return view('employer.detail');
    }
}

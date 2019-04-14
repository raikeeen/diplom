<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
    public function index()
    {
        //$news = news::orderBy('id','DESC')->get();
        //return view('welcome', ['news' => $news]);
        return view('tasks.tasks');
    }
    public function detail()
    {

        return view('tasks.detail');
    }
}

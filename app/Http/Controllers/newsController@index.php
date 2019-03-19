<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class newsController extends Controller
{
    public function index()
    {
        $news = news::orderBy('id','DESC')->get();
        return view('welcome', ['news' => $news]);
    }
}

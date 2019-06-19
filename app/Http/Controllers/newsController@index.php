<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class newsController extends Controller
{
    public function index()
    {
        $news = news::orderBy('id','DESC')->get();
        return view('news.news', ['news' => $news]);
    }

    public function main()
    {
        $news = news::orderBy('id','DESC')->get();
        return view('welcome', ['news' => $news]);
    }
    public function detail()
    {
        return view('news.detail');

    }
}

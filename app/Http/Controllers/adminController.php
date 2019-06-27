<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users=user::all();
        return view('admin',['users'=>$users]);
    }}

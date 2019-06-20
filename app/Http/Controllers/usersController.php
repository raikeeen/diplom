<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $users = user::where('id', $userId)->first();
        return view('users.detail');
    }
}

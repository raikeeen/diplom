<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\RoleUser;
use App\Models\Role;
use App\Models\Tasks;
use App\Models\Reviews;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Foreach_;

class usersController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id();
        $usersss = user::where('id', $userId)->first();
        $tasks = $usersss->Tasks;

        $taskWork = collect([]);
        $taskClose = collect([]);
        $count= 0;
        $reviews = reviews::all();
        foreach ($reviews as $review)
            if($review->idUser == $usersss->id)
                $count++;

        foreach ($tasks as $task){
            if($task->fulfilment == 'work'){
                $taskWork->push($task);
            }
            if($task->fulfilment == 'close'){
                $taskClose->push($task);
            }
        }


        $users = user::where('id', $request->id)->first();
        $userss = user::all();
        $reviews = Reviews::where('idUser', $request->id)->get();
        $needUser = [];

        $userCreator = user::where('id', $request->id)->first();
        foreach ($userss as $user)
        foreach ($reviews as $review)
            if($review->idUserReviewСreator == $user->id)
                $needUser = $user;



        return view('users.detail',[
            'users' => $users,
            'reviews' => $reviews,
            'needUser' => $needUser,
            'taskWork'   => $taskWork,
            'taskClose'  => $taskClose,
            'tasks'      => $users->Tasks,
            'count'      => $count,
        ]);
    }
    public function front()
    {
        $userId = Auth::id();
        $users = user::where('id', $userId)->first();
        dump($users->Role->name);
        //if($users->Role->name == 'компания')


        return view('layouts.front',[
            'users' => $users
        ]);
    }
    public function personalIndex()
    {
        $userId = Auth::id();
        $usersss = user::where('id', $userId)->first();
        $tasks = $usersss->Tasks;

        $taskWork = collect([]);
        $taskClose = collect([]);
        $count= 0;
        $reviews = reviews::all();
        foreach ($reviews as $review)
            if($review->idUser == $usersss->id)
                $count++;

        foreach ($tasks as $task){
            if($task->fulfilment == 'work'){
                $taskWork->push($task);
            }
            if($task->fulfilment == 'close'){
                $taskClose->push($task);
            }
        }

        $userId = Auth::id();
        $users = user::where('id', $userId)->first();

        return view('users.personal',[
            'users' => $users,
            'taskWork'   => $taskWork,
            'taskClose'  => $taskClose,
            'tasks'      => $users->Tasks,
            'count'      => $count,
        ]);
    }
    private function saveImage($img){

        $extension = $img->getClientOriginalExtension();
        $localFileName = rand() . $img->getClientOriginalName();

        $path = Storage::disk('public')->putFileAs('uploads/avatar',
            $img,
            hash('md5', $localFileName) . '.' . $extension);
        return $path;
    }
    public function personalEdit(Request $request)
    {
        $userId = Auth::id();
        $users = user::where('id', $userId)->first();

        if($request->file('avatarImg')) {
            $path=$this->saveImage($request->file('avatarImg'));

        }

        $users->name=$request->name;
        $users->about=$request->about;
        $users->contact = $request->contact;

        if(isset($path)) {
            $users->avatar = $path;
        }

        $users->save();

        /*dump($users->Role);
        if($users->Role) {
            $userRole = new RoleUser();
            $userRole->user_id = $userId;
            $userRole->role_id = $request->anonim;
            $userRole->save();
        }*/



        return view('users.personal',[
            'users' => $users,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\Towns;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class tasksController extends Controller
{
    public function index()
    {
        $tasks=tasks::orderBy('id','DESC')->get();
        return view('tasks.tasks', ['tasks' => $tasks]);
    }
    public function detail(Request $request)
    {
        $tasks = tasks::where('id', $request->id)->first();
        return view('tasks.detail', ['tasks' => $tasks]);
    }
    public function add(Request $request)
    {
        $userId = Auth::id();
        $tasks = new tasks();
        $tasks->name = $request->name;
        //$tasks->about = addslashes($request->about);
        $tasks->about = $request->about;
        $tasks->idTowns = $request->town;
        $tasks->idUser = $userId;
        //$tasks->idCategory = $request->category;
        $tasks->idCategory = 1;
        $tasks->price = $request->price;

        $tasks->save();
        return redirect('/tasks');
    }
    public function indexAdd(){
        $towns = towns::all();
        return view('tasks.add',['towns' => $towns->sortBy('name')]);
        /**
         *         $blog = blog::all();
        $blog = $blog->sortBy('тфьу', SORT_REGULAR, true);

        return view('admin.newsCreate', ['blog' => $blog]);
         */
    }
}

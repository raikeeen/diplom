<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\AddTaskUser;
use App\Models\Towns;
use App\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class tasksController extends Controller
{
    public function index(){
        $towns=towns::orderBy('id','DESC')->get();
        $tasks=tasks::orderBy('id','DESC')->get();

        return view('tasks.tasks', [
            'tasks' => $tasks,
            'towns' => $towns
            ]);
    }
    public function detail(Request $request){
        $userId = Auth::id();
        $tasks = tasks::where('id', $request->id)->first();

        $AddTaskUser = AddTaskUser::all();
        $check = null;

        foreach ($AddTaskUser as $taskUser){
            if($tasks->id == $taskUser->idTask){
                $check = 'Вы уже откликнулись';
            }
            if(($tasks->id == $taskUser->idTask) == $userId){
                $check = 'Отклики';
            }
        }

        return view('tasks.detail', [
            'tasks' => $tasks,
            'check' => $check
            ]);
    }
    public function add(Request $request){
        $userId = Auth::id();
        $tasks = new tasks();

        $tasks->name        = $request->name;
        $tasks->about       = $request->about;
        $tasks->idTowns     = $request->town;
        $tasks->idUser      = $userId;
        $tasks->idCategory  = 1;
        $tasks->price       = $request->price;

        $tasks->save();
        return redirect('/tasks');
    }
    public function apply(Request $request){
        $userId = Auth::id();
        $AddTaskUser = new AddTaskUser();

        $AddTaskUser->idUser = $userId;
        $AddTaskUser->about  = $request->task_comment;
        $AddTaskUser->idTask = $request->id;

        $AddTaskUser->save();
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
    public function my(){

        $userId = Auth::id();
        $users = user::where('id', $userId)->first();
        $tasks = $users->Tasks;

        $taskWork = collect([]);
        $taskClose = collect([]);


        foreach ($tasks as $task){
            if($task->fulfilment == 'work'){
                $taskWork->push($task);
            }
            if($task->fulfilment == 'close'){
                $taskClose->push($task);
            }
        }

        return view('tasks.activeTask',[
            'users'      => $users,
            'taskWork'   => $taskWork,
            'taskClose'  => $taskClose,
            'tasks'      => $users->Tasks
        ]);
    }
    public function myWork(){

        $userId = Auth::id();
        $users = user::where('id', $userId)->first();
        $tasks = $users->Tasks;

        $taskWork = collect([]);
        $taskClose = collect([]);


        foreach ($tasks as $task){
            if($task->fulfilment == 'work'){
                $taskWork->push($task);
            }
            if($task->fulfilment == 'close'){
                $taskClose->push($task);
            }
        }

        return view('tasks.workTask',[
            'users'      => $users,
            'taskWork'   => $taskWork,
            'taskClose'  => $taskClose,
            'tasks'      => $users->Tasks
        ]);
    }
    public function myClose(){

        $userId = Auth::id();
        $users = user::where('id', $userId)->first();
        $tasks = $users->Tasks;

        $taskWork = collect([]);
        $taskClose = collect([]);


        foreach ($tasks as $task){
            if($task->fulfilment == 'work'){
                $taskWork->push($task);
            }
            if($task->fulfilment == 'close'){
                $taskClose->push($task);
            }
        }

        return view('tasks.closeTask',[
            'users'      => $users,
            'taskWork'   => $taskWork,
            'taskClose'  => $taskClose,
            'tasks'      => $users->Tasks
        ]);
    }
}

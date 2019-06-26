<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\AddTaskUser;
use App\Models\Towns;
use App\Models\Messages;
use App\Models\Reviews;
use App\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Storage;

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
        $usersOtklik = collect([]);
        $check = null;

        foreach ($AddTaskUser as $taskUser){
            if($tasks->id == $taskUser->idTask and $taskUser->idUser == $userId){
                $check = 'Вы уже откликнулись';
            }
        }

        return view('tasks.detail', [
            'tasks'       => $tasks,
            'usersOtklik' => $usersOtklik,
            'check'       => $check
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
        return redirect('/personal/activeTask');
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
    public function response(Request $request){
        $tasks = tasks::where('id', $request->id)->first();
        $AddTaskUser = AddTaskUser::where('idTask',$request->id)->get();
        $AddTaskUserAll = AddTaskUser::all();
        $users = User::all();
        $userAppointed = collect([]);
        $userAddTask = null;
        $taskAll = 0;
        $taskSelect = 0;
        $id=$request->id;

        if(!is_null($tasks->appointed)){
            foreach($users as $user) {
                if($tasks->appointed == $user->id) {
                    $userAppointed = $userAppointed->push($user);
                    $taskSelect++;
                    $userAddTask = AddTaskUser::where('idUser',$user->id)->first();
                }
            }
        }
        foreach($AddTaskUserAll as $AddTask){
            if($request->id == $AddTask->idTask)
                $taskAll++;
        }

        return view('tasks.response', [
            'tasks'         => $tasks,
            'AddTaskUser'   => $AddTaskUser,
            'users'         => $users,
            'userAppointed' => $userAppointed,
            'userAddTask'   => $userAddTask,
            'taskSelect'    => $taskSelect,
            'taskAll'       => $taskAll,
            'id'            => $id,

        ]);
    }
    public function responseSelect(Request $request){
        $tasks = tasks::where('id', $request->id)->first();
        $AddTaskUser = AddTaskUser::where('idTask',$request->id)->get();
        $AddTaskUserAll = AddTaskUser::all();
        $users = User::all();
        $userAppointed = collect([]);
        $userAddTask = null;
        $taskAll = 0;
        $taskSelect = 0;
        $id=$request->id;

        if(!is_null($tasks->appointed)){
            foreach($users as $user) {
                if($tasks->appointed == $user->id) {
                    $userAppointed = $userAppointed->push($user);
                    $taskSelect++;
                    $userAddTask = AddTaskUser::where('idUser',$user->id)->first();
                }
            }
        }
        foreach($AddTaskUserAll as $AddTask){
            if($request->id == $AddTask->idTask)
                $taskAll++;
        }

        return view('tasks.responseSelect', [
            'tasks'         => $tasks,
            'AddTaskUser'   => $AddTaskUser,
            'users'         => $users,
            'userAppointed' => $userAppointed,
            'userAddTask'   => $userAddTask,
            'taskSelect'    => $taskSelect,
            'taskAll'       => $taskAll,
            'id'            => $id,

        ]);
    }
    public function responseSelectPost(Request $request){
        $tasks = tasks::where('id', $request->id)->first();

        return view('tasks.responseDialog',[
            'tasks' => $tasks,
        ]);
    }
    public function responseDialog(Request $request){
        $tasks = tasks::where('id', $request->id)->first();
        $userId = Auth::id();
        $users = user::all();
        $userCompany = null;
        $userShpper = null;


        foreach ($users as $user){
            if($user->id == $tasks->appointed) {
                $userShpper = $user;
                break;
            }

        }
        foreach ($users as $user){
            if(($user->id == $tasks->idUser) == $userId){
                $userCompany = $user;
                break;
            }
        }
        /*dump($userId);
        dump($request->idUser);


        dump($userCompany);
        dump($userShpper);*/
        $messagesCompany = messages::where('idUserCreate', $userCompany->id)->get();
        $messagesShpper = messages::where('idUserCreate', $userShpper->id)->get();
        $messagesCompanyCount = messages::where('idUserCreate', $userCompany->id)->get()->count();
        $messagesShpperCount = messages::where('idUserCreate', $userShpper->id)->get()->count();


        /*dump($messagesCompany);
        dump($messagesShpper);*/
        /*dump($messagesCompanyCount);
        dump($messagesShpperCount);
*/
        return view('tasks.responseDialog',[
            'tasks' => $tasks,
            'userShpper' => $userShpper,
            'userCompany' => $userCompany,
            'messagesCompany' => $messagesCompany,
            'messagesShpper' => $messagesShpper,
            'messagesCompanyCount' => $messagesCompanyCount,
            'messagesShpperCount' => $messagesShpperCount,


        ]);
    }
    public function review(Request $request){
        $tasks = tasks::where('id', $request->id)->first();

        return view('tasks.review', [
            'tasks' => $tasks,
        ]);

    }
    public function reviewPost(Request $request){
        $tasks = tasks::where('id', $request->id)->first();
        $userCompany = $tasks->idUser;
        $userShopper = $tasks->appointed;
        $reviews = new Reviews();
        $reviews->idUserReviewСreator = $tasks->idUser;
        $reviews->idUser = $tasks->appointed;
        $reviews->rating = $request->rating;
        $reviews->descriptions = $request->about;
        $reviews->save();


        $tasks->fulfilment = 'close';
        $tasks->save();


        return redirect('/');

    }
    public function responseDialogPost(Request $request){
        $tasks = tasks::where('id', $request->id)->first();
        $userId = Auth::id();

        $messages = new messages();

        $messages->idUserCreate = $userId;
        $messages->text         = $request->about;
        $messages->idTask       = $tasks->id;

        if($request->file('file')) {
            $path=$this->saveImage($request->file('file'));

        }

        if(isset($path)) {
            $messages->file = $path;
        }

        $messages->save();


        return back();
    }
    private function saveImage($img){

        $extension = $img->getClientOriginalExtension();
        $localFileName = rand() . $img->getClientOriginalName();

        $path = Storage::disk('public')->putFileAs('uploads/avatar',
            $img,
            hash('md5', $localFileName) . '.' . $extension);
        return $path;
    }
    public function responsePost(Request $request){

        $tasks = tasks::where('id', $request->id)->first();
        $tasks->appointed = $request->idUser;
        $tasks->fulfilment = 'work';
        $tasks->save();

        if(is_null(messages::where('idUserCreate',$request->idUser)->first())) {

            $addTaskUser = AddTaskUser::where('idTask', $request->id)->first();
            $messages = new messages();

            $messages->idUserCreate = $request->idUser;
            $messages->text         = $addTaskUser->about;
            $messages->idTask       = $addTaskUser->idTask;
            $messages->save();
        }

        return back();
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
    public function dialog(Request $request){

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

        return view('tasks.dialogTask', [
            'tasks' => $tasks,
            'check' => $check
        ]);
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

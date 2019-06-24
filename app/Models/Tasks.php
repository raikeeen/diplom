<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AddTaskUser;
use App\User;

class Tasks extends Model
{
    protected $table = 'tasks';

    public function user(){
        return $this->belongsTo('App\User','idUser');
    }
    public function towns(){
        return $this->belongsTo('App\Models\Towns','idTowns');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category','idCategory');
    }

    public function addUserTask(){
        return $this->hasMany(AddTaskUser::class,'idTask');
    }
    public function messages(){
        return $this->hasMany(Messages::class,'idTask');
    }

}

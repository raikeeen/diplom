<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function towns(){
        return $this->belongsTo('App\Models\Towns');
    }
    public function addTaskUser(){
        return $this->belongsTo('App\Models\AddTaskUser');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}

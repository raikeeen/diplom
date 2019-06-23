<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tasks;
class AddTaskUser extends Model
{
    protected $table = 'addUserTask';

    public function tasks(){
        return $this->belongsTo('App\Models\Tasks');
    }
}

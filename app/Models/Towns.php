<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tasks;

class Towns extends Model
{
    protected $table = 'towns';
    public function tasks(){
        return $this->hasMany(Task::class,'idTowns');
    }
}

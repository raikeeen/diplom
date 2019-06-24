<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';
    public function tasks(){
        return $this->belongsTo('App\Models\Tasks','idTask');
    }
}

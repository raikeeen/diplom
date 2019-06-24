<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tasks;

class Category extends Model
{
    protected $table = 'category';
    public function tasks(){
        return $this->hasMany(Tasks::class,'idCategory');
    }
}

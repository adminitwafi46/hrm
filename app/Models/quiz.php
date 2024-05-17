<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    //fillable, id_user, name, level, description
    protected $fillable = ['user_id', 'name', 'level', 'description'];
}

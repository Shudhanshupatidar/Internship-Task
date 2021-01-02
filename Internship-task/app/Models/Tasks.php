<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table='tasks';

     
    protected $fillable = [
        'user_name',
        'task_name',
        'task_type',
    ];
}

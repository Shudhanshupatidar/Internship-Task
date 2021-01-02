<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'mobile',
    ];

    public function task()
    {
        return $this->hasOne('App\Models\Tasks');
    }
}

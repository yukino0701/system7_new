<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    //テーブル名
    protected $table = 'users';


    //可変項目
    protected $fillable =
    [
        'user_name',
        'email',
        'password',
        'password_re',
        'id'

    ];

    protected $hidden = 'password';

    //不変項目
    protected $guarded =
    [
    
    ];



}

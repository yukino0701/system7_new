<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //テーブル名
    protected $table = 'companies';


    //可変項目
    protected $fillable =
    [
        'company_name',
        'streetaddress',
        'representative_name'

    ];
    //不変項目
    protected $guarded =
    [
        'id'

    ];

    public function Products()
    {

        return $this->hasMany('Models\Product');
    }




}

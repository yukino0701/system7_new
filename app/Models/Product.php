<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //テーブル名
    protected $table = 'products';



    //可変項目
    protected $fillable =
    [
        'product_id'
        
    ];
    //不変項目
    protected $guarded =
    [
        'id'
        
    ];

    public function Sales()
    {

        return $this->hasMany('Models\Sale');
    }

    public function Company(){


        return $this->belongsTo('Models\Company');

    }


}

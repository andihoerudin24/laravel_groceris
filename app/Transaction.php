<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable=[
        'id_product','id_user','qty','order_total','status'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class,'id_product');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}

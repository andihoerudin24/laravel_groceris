<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $fillable=[
        'id_categories','name_product','price','foto','stock','deskripsi'
    ];

    public function categories()
    {
       return $this->belongsTo(Categories::class,'id_categories');
    }

    public function transactions()
    {
        return $this->belongsToMany(User::class, 'transactions', 'id_product','id_user')
                                    ->withPivot('qty','order_total','status');
    }


}

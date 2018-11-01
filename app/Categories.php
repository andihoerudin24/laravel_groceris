<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

  protected $fillable=[
      'nama_kategori','foto','deskripsi'
  ];

  public function products()
    {
        return $this->hasMany(Products::class,'id_categories');
    }
}

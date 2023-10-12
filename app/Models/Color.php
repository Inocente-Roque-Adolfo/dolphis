<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $guarded = ['name'];

    //Relacion Muchos a Muchos
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //Proteger los campos
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación 1 a Muchos con Tabla Productos
    public function products(){
        return $this->hasMany(Product::class);
    }

    //Relación 1 a Muchos Inversa con Tabla Categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

}

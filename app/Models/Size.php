<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    //Proteger los campos
    protected $guarded = ['id', 'name', 'product_id'];

    //Relacion 1 a Muchos Inversa con Tabla Productos
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //Relacion Muchos a Muchos con Tabla Color
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

}

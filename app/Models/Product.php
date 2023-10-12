<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Proteger los campos
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion 1 a Muchos con Tabla Size
    public function sizes(){
        return $this->hasMany(Size::class);
    }
    //Relacion 1 a Muchos Inversa con Tabla Brand
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Relacion muchos a muchos con Tabla Color
    public function colors(){
        return $this->hasMany(Color::class);
    }


    //Relacion 1 a Muchos polimorfica
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
}

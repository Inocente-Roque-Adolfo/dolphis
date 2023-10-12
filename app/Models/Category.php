<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'slug', 'image', 'icon'];


    // Relación 1 a Muchos con Tabla Subcategorías
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //Re1ación Muchos a Mucho con Tabla Marcas
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //Relación directa hasta Tabla Productos
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

}


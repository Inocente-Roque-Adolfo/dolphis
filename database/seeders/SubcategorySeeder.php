<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $subcategories = [
            //Laptos y computadoras

            [
                'category_id' => 1,
                'name' => 'Laptops',
                'slug' => Str::slug('Laptops'),
                'color' => 'blue'
            ].
            [
                'category_id' => 1,
                'name' => 'Computadora',
                'slug' => Str::slug('Computadora')
            ].
            [
                'category_id' => 1,
                'name' => 'Oficina y hogares',
                'slug' => Str::slug('Oficina y hogares')

            ],
            [
                'category_id' => 1,
                'name' => 'Ingenieria y arquitectura',
                'slug' => Str::slug('Ingenieria y arquitectura')
            ],
            [
                'category_id' => 1,
                'name' => 'Gamer',
                'slug' => Str::slug('Gamer')
            ],
            //IMPRESORAS
            [
                'category_id' => 2,
                'name' => 'Impresora de tinta',
                'slug' => Str::slug('Impresora de tinta'),
                'Color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Impresora multifuncional',
                'slug' => Str::slug('Impresora multifuncional'),
                'Color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Impresora toner',
                'slug' => Str::slug('Impresora toner'),
                'Color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Impresora industrial',
                'slug' => Str::slug('Impresora industrial'),
                'Color' => true
            ],
            //ACCESORIOS
            [
                'category_id' => 3,
                'name' => 'Monitor',
                'slug' => Str::slug('Monitor'),
                'Color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'kit teclado y mouse',
                'slug' => Str::slug('kit teclado y mouse'),
                'Color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Microfono',
                'slug' => Str::slug('Microfono'),
                'Color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Webcam',
                'slug' => Str::slug('Webcam'),
                'Color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Protector',
                'slug' => Str::slug('Protector'),
                'color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Adaptador inalambrico',
                'slug' => Str::slug('Adaptador inalambrico'),
                'color' => true
            ],
            //Partes y repuestos
            [
                'category_id' => 4,
                'name' => 'Bateria Laptop',
                'slug' => Str::slug('Bateria Laptop'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Cargador',
                'slug' => Str::slug('Cargador'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Disco duro',
                'slug' => Str::slug('Disco duro'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Memoria ram',
                'slug' => Str::slug('Memoria ram'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Placa madre',
                'slug' => Str::slug('Placa madre'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Tarjetas',
                'slug' => Str::slug('Tarjetas'),
                'color' => true
            ]

        ];
        foreach ($subcategories as $subcategory) {
            //\App\Models\Category::create($Category);
            Subcategory::factory(1)->create($subcategory);
        }
    }
}

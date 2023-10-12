<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Categories = [
            [
                'name' => 'Laptops y computadoras',
                'slug' => Str::slug('Laptops y computadoras'),
                'icon' => '<i class="fas fa-laptop"></i>',

            ],
            [
                'name' => 'Impresoras',
                'slug' => Str::slug('Impresoras'),
                'icon' => '<i class="fas fa-print"></i>',
            ],
            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
                'icon' => '<i class="fas fa-keyboard"></i>',
            ],
            [
                'name' => 'Partes y Repuestos',
                'slug' => Str::slug('Partes y Repuestos'),
                'icon' => '<i class="fas fa-sim-card"></i>',
            ],
        ];

        foreach ($Categories as $Category) {
            //\App\Models\Category::create($Category);
            Category::factory(1)->create($Category);

        }
    }
}

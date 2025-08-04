<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            [
                'nombre' => 'Chocolates Premium',
                'descripcion' => 'Línea de chocolates gourmet con ingredientes de la más alta calidad.'
            ],
            [
                'nombre' => 'Dulces Mágicos',
                'descripcion' => 'Categoría de dulces con efectos especiales y sabores únicos.'
            ],
            [
                'nombre' => 'Caramelos Clásicos',
                'descripcion' => 'Tradicionales caramelos y gomitas de toda la vida con el toque Wonka.'
            ],
            [
                'nombre' => 'Bebidas Fantásticas',
                'descripcion' => 'Línea de bebidas gaseosas y líquidos con propiedades especiales.'
            ],
            [
                'nombre' => 'Edición Limitada',
                'descripcion' => 'Productos exclusivos y de colección con disponibilidad limitada.'
            ]
        ];

        foreach ($marcas as $marca) {
            Marca::create($marca);
        }
    }
}

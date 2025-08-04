<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $productos = [
            // Chocolates Premium
            [
                'nombre' => 'Chocolate Negro 85%',
                'precio' => 35.99,
                'descripcion' => 'Chocolate negro premium con cacao de las mejores plantaciones.',
                'stock' => 45,
                'marca_id' => 2
            ],
            [
                'nombre' => 'Trufa de Avellana',
                'precio' => 28.50,
                'descripcion' => 'Exquisitas trufas rellenas de crema de avellana.',
                'stock' => 60,
                'marca_id' => 2
            ],
            
            // Dulces Mágicos
            [
                'nombre' => 'Gobstopper Eterno',
                'precio' => 18.99,
                'descripcion' => 'El dulce que cambia de sabor y nunca se termina.',
                'stock' => 40,
                'marca_id' => 3
            ],
            [
                'nombre' => 'Chicle de Cena Completa',
                'precio' => 22.50,
                'descripcion' => 'Un chicle que sabe a sopa, carne y pay de arándanos.',
                'stock' => 30,
                'marca_id' => 3
            ],
            
            // Caramelos Clásicos
            [
                'nombre' => 'Caramelos de Miel',
                'precio' => 12.75,
                'descripcion' => 'Tradicionales caramelos de miel con el toque especial Wonka.',
                'stock' => 80,
                'marca_id' => 4
            ],
            [
                'nombre' => 'Gomitas de Frutas',
                'precio' => 15.25,
                'descripcion' => 'Gomitas suaves con sabores naturales de frutas tropicales.',
                'stock' => 70,
                'marca_id' => 4
            ],
            
            // Bebidas Fantásticas
            [
                'nombre' => 'Bebida Elevadora',
                'precio' => 35.00,
                'descripcion' => 'Bebida gaseosa que te hace sentir liviano como una pluma.',
                'stock' => 20,
                'marca_id' => 5
            ],
            [
                'nombre' => 'Refresco Violeta',
                'precio' => 28.75,
                'descripcion' => 'Refresco con un color violeta intenso y burbujas especiales.',
                'stock' => 25,
                'marca_id' => 5
            ],
            
            // Edición Limitada
            [
                'nombre' => 'Chocolate Golden Ticket',
                'precio' => 99.99,
                'descripcion' => 'Chocolate premium con posibilidad de encontrar un ticket dorado.',
                'stock' => 5,
                'marca_id' => 6
            ],
            [
                'nombre' => 'Barra del Aniversario',
                'precio' => 75.00,
                'descripcion' => 'Edición especial conmemorativa con ingredientes secretos.',
                'stock' => 8,
                'marca_id' => 6
            ]
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}

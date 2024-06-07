<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $this->createProducto($i);
        }
    }

    private function createProducto(int $i): void
    {
        Producto::factory()->create([
            "descripcion" => "Descripcion Prueba " . $i,
            "categoria" => "Categoria Prueba " . $i,
            "costos" => "Costos Prueba " . $i,
            "ganancia" => "Ganancia Prueba " . $i,
            "stock" => "Stock Prueba " . $i,
            "precio" => "Precio Prueba " . $i,
        ]);  
    }
}

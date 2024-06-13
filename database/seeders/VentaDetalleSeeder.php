<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB; // Add DB for database interaction

class VentaDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define sample data (modify as needed)
        $ventaDetalles = [
            [
                'venta_id' => 1, 
                'producto_id' => 1, 
                'precio_venta' => 10.50,
                'cantidad' => 5,
            ],
            [
                'venta_id' => 2, 
                'producto_id' => 2, 
                'precio_venta' => 25.75,
                'cantidad' => 2,
            ],
            // Add more data as needed
        ];
    }
}

<?php

namespace Database\Seeders;
use App\Models\Venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    {
            [
                'fecha_registro' => '2024-06-11',
                'cliente_id' => 1,
                'nit' => '123456789',
                'total' => 1000.00,
            ];

            [
                'fecha_registro' => '2024-06-10',
                'cliente_id' => 2,
                'nit' => '987654321',
                'total' => 500.00,
            ] ;
    }
}

}


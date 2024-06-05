<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $this->createCliente($i);
        }
    }
    
    private function createCliente(int $i): void
    {
        Cliente::factory()->create([
            "nombre"=> "Cliente Prueba " . $i,
            "ap_paterno"=> "Apellido Prueba ". $i,
            "ap_materno"=> "Apellido Prueba". $i,
            "ci"=> "5463215". $i,
            "telf"=> "234234". $i,
            "direccion"=> "Direccion ". $i,
        ]);   
       
    }
}

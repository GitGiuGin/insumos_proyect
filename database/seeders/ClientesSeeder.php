<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    
    public function run(): void
    {
        $clientes = new Clientes();

        $clientes->nombre = 'Gabriel Alessandro';
        $clientes->apellido = 'Rada Flores';
        $clientes->tipo_documento = 'Carnet de identidad';
        $clientes->num_documento = '9909976';
        $clientes->direccion = 'Av. Armentia #1243';
        $clientes->telefono = '76506497';
        $clientes->correo = 'gabriel.rada@gmail.com';

        $clientes -> save();
    }
}

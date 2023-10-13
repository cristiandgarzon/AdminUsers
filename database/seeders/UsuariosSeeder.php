<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Usuario::create([
                'nombre' => 'Nombre'.$i,
                'apellido' => 'Apellido'.$i,
                'correo_electronico' => 'correo'.$i.'@example.com',
                'fecha_de_registro' => now(),
            ]);
        }
    }
}

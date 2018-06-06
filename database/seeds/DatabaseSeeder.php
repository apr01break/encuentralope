<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Tecnologias'],
            ['nombre' => 'Deportes'],
            ['nombre' => 'Relojes y joyas'],
            ['nombre' => 'Herramientas e industrias']
        ]);
        DB::table('subcategorias')->insert([
            ['nombre' => 'Celulares', 'categoria_id' => '1'],
            ['nombre' => 'Consolas de juegos', 'categoria_id' => '1'],
            ['nombre' => 'Otros', 'categoria_id' => '1'],
            ['nombre' => 'Bicicletas', 'categoria_id' => '2'],
            ['nombre' => 'Patines', 'categoria_id' => '2'],
            ['nombre' => 'Otros', 'categoria_id' => '2'],
            ['nombre' => 'Collares', 'categoria_id' => '3'],
            ['nombre' => 'Anillos', 'categoria_id' => '3'],
            ['nombre' => 'Otros', 'categoria_id' => '3'],
            ['nombre' => 'Máquinas', 'categoria_id' => '4'],
            ['nombre' => 'Taladros', 'categoria_id' => '4'],
            ['nombre' => 'Otros', 'categoria_id' => '4'],

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'genero_id' => 1,
            'nombre' => 'Ádammo',
            'fecha_origen' => '2011-09-17',
        ]);
        DB::table('grupos')->insert([
            'genero_id' => 2,
            'nombre' => 'Arena Hash',
            'fecha_origen' => '2009-06-27',
        ]);
        DB::table('grupos')->insert([
            'genero_id' => 1,
            'nombre' => 'Amén',
            'fecha_origen' => '2006-11-09',
        ]);
        DB::table('grupos')->insert([
            'genero_id' => 3,
            'nombre' => 'Bareto',
            'fecha_origen' => '2009-07-18',
        ]);
        DB::table('grupos')->insert([
            'genero_id' => 1,
            'nombre' => 'Los Mojarras',
            'fecha_origen' => '2012-05-03',
        ]);
        DB::table('grupos')->insert([
            'genero_id' => 1,
            'nombre' => 'Mar de Copas',
            'fecha_origen' => '2001-10-17',
        ]);
        DB::table('grupos')->insert([
            'genero_id' => 5,
            'nombre' => 'Romeo Santos',
            'fecha_origen' => '2011-01-09',
        ]);
        DB::table('grupos')->insert([
            'genero_id' => 4,
            'nombre' => 'Martin Garrix',
            'fecha_origen' => '2013-03-12',
        ]);
    }
}

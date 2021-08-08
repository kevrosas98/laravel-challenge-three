<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('generos')->insert(['nombre' => 'Rock']);
        // DB::table('generos')->insert(['nombre' => 'Balada']);
        // DB::table('generos')->insert(['nombre' => 'Cumbia']);
        // DB::table('generos')->insert(['nombre' => 'Electronica']);
        // DB::table('generos')->insert(['nombre' => 'Bachata']);
        DB::table('generos')->insert(['nombre' => 'Salsa']);
    }
}

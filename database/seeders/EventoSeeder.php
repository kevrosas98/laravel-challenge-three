<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('eventos')->insert([
        //     'genero_id' => 1,
        //     'grupo_id' => 1,
        //     'nombre' => 'Vivo por el Rock 2021',
        //     'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
        //     'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
        //     'fecha' => '2021-06-30',
        //     'hora' => '15:39:34',
        //     'precio' => '35',
        //     'lugar' => 'Zoom',
        // ]);

        // DB::table('eventos')->insert([
        //     'genero_id' => 4,
        //     'grupo_id' => 8,
        //     'nombre' => 'Ultra Perú',
        //     'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
        //     'img_large' => 'https://cdn.joinnus.com/files/2021/06/nhD0Jq5VTkJ69Vh.png',
        //     'fecha' => '2021-07-24',
        //     'hora' => '20:00:00',
        //     'precio' => '50',
        //     'lugar' => 'Zoom',
        // ]);

        // DB::table('eventos')->insert([
        //     'genero_id' => 2,
        //     'grupo_id' => 2,
        //     'nombre' => 'Festival Balada Peruana',
        //     'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
        //     'img_large' => 'https://cdn.joinnus.com/files/2021/06/3cUeXAUhKZgvhdf.png',
        //     'fecha' => '2021-08-04',
        //     'hora' => '20:00:00',
        //     'precio' => '45',
        //     'lugar' => 'Zoom',
        // ]);

        // DB::table('eventos')->insert([
        //     'genero_id' => 1,
        //     'grupo_id' => 6,
        //     'nombre' => 'Raices Perú',
        //     'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
        //     'img_large' => 'https://cdn.joinnus.com/files/2021/06/Ms9zKWZ8SaYdBlH.png',
        //     'fecha' => '2021-07-12',
        //     'hora' => '20:00:00',
        //     'precio' => '40',
        //     'lugar' => 'Zoom',
        // ]);

        // DB::table('eventos')->insert([
        //     'genero_id' => 1,
        //     'grupo_id' => 5,
        //     'nombre' => 'Viva Perú',
        //     'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
        //     'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
        //     'fecha' => '2021-07-28',
        //     'hora' => '18:00:00',
        //     'precio' => '55',
        //     'lugar' => 'Teleticket Streem',
        // ]);

        // DB::table('eventos')->insert([
        //     'genero_id' => 5,
        //     'grupo_id' => 7,
        //     'nombre' => 'Ritmo Bachata',
        //     'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
        //     'img_large' => 'https://cdn.joinnus.com/files/2021/06/nhD0Jq5VTkJ69Vh.png',
        //     'fecha' => '2021-08-14',
        //     'hora' => '20:00:00',
        //     'precio' => '35',
        //     'lugar' => 'Zoom',
        // ]);

        DB::table('eventos')->insert([
            'genero_id' => 1,
            'grupo_id' => 5,
            'nombre' => 'Viva Rock Perú',
            'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
            'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
            'fecha' => '2021-07-16',
            'hora' => '20:00:00',
            'precio' => '65',
            'lugar' => 'Joinnus Meeting',
        ]);

        DB::table('eventos')->insert([
            'genero_id' => 1,
            'grupo_id' => 6,
            'nombre' => 'Rock Latino',
            'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
            'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
            'fecha' => '2021-08-30',
            'hora' => '20:00:00',
            'precio' => '55',
            'lugar' => 'Joinnus Meeting',
        ]);

        DB::table('eventos')->insert([
            'genero_id' => 2,
            'grupo_id' => 2,
            'nombre' => 'Baladas Colombianas',
            'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
            'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
            'fecha' => '2021-08-30',
            'hora' => '20:00:00',
            'precio' => '55',
            'lugar' => 'Joinnus Meeting',
        ]);

        DB::table('eventos')->insert([
            'genero_id' => 2,
            'grupo_id' => 2,
            'nombre' => 'Baladas para Mamá',
            'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
            'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
            'fecha' => '2021-08-30',
            'hora' => '20:00:00',
            'precio' => '55',
            'lugar' => 'Joinnus Meeting',
        ]);

        DB::table('eventos')->insert([
            'genero_id' => 2,
            'grupo_id' => 2,
            'nombre' => 'Baladitas del Mañana',
            'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
            'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
            'fecha' => '2021-08-30',
            'hora' => '20:00:00',
            'precio' => '55',
            'lugar' => 'Joinnus Meeting',
        ]);

        DB::table('eventos')->insert([
            'genero_id' => 2,
            'grupo_id' => 2,
            'nombre' => 'Baladas de Latinos',
            'img_small' => 'https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg',
            'img_large' => 'https://cdn.joinnus.com/files/2021/05/GIMDu3E71CVixp3.png',
            'fecha' => '2021-08-30',
            'hora' => '20:00:00',
            'precio' => '55',
            'lugar' => 'Joinnus Meeting',
        ]);
    }
}

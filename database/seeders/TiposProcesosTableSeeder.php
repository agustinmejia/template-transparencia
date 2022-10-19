<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TiposProcesosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_procesos')->delete();
        
        \DB::table('tipos_procesos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Inclunplimiento de deberes',
                'slug' => 'inclunplimiento-de-deberes',
                'descripcion' => NULL,
                'estado' => 1,
                'created_at' => '2022-10-18 23:32:28',
                'updated_at' => '2022-10-18 23:32:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Conducta antieconomica',
                'slug' => 'conducta-antieconomica',
                'descripcion' => NULL,
                'estado' => 1,
                'created_at' => '2022-10-18 23:32:40',
                'updated_at' => '2022-10-18 23:32:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Deterioro de bienes del estado',
                'slug' => 'deterioro-de-bienes-del-estado',
                'descripcion' => NULL,
                'estado' => 1,
                'created_at' => '2022-10-18 23:32:51',
                'updated_at' => '2022-10-18 23:32:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 28,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 29,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 30,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
        ));
        
        
    }
}
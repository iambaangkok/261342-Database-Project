<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'a',
                'email' => 'iambaangkok@gmail.com',
                'email_verified_at' => NULL,
                'customerNumber' => 103,
                'password' => '$2y$10$lOc5R9Og3bZdH1sP0FHFEeb44gKOYPqyvpqSdfxXTEKEUh2GEu/76',
                'remember_token' => NULL,
                'created_at' => '2022-10-20 20:17:27',
                'updated_at' => '2022-10-20 20:17:27',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'YES',
                'email' => 'YES@YES.com',
                'email_verified_at' => NULL,
                'customerNumber' => 121,
                'password' => '$2y$10$LwRLIdJ1BaXYm6313yidSuKEnPBAJY.y1sdRceRoJMqhbADrO6ZuG',
                'remember_token' => NULL,
                'created_at' => '2022-10-20 20:18:01',
                'updated_at' => '2022-10-20 20:18:01',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'YESS',
                'email' => 'YESS@YES.com',
                'email_verified_at' => NULL,
                'customerNumber' => 223,
                'password' => '$2y$10$2ixov98CHsN/TwB1x5CBfujXJ9hEt0IXXnZbSPNouEJgO.IFlVqny',
                'remember_token' => NULL,
                'created_at' => '2022-10-20 20:22:05',
                'updated_at' => '2022-10-20 20:22:05',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'AAA',
                'email' => 'AAA@AAA.AAA',
                'email_verified_at' => NULL,
                'customerNumber' => 321,
                'password' => '$2y$10$/e2fnek.mbAzDVeVzUiO6eZEYj1MNsYJH9N/XV8XSyiHMf.4SVcHK',
                'remember_token' => 'iWSSS0pqglZSbuYbs95rCXVJ7Y79GkXJNLvNucj2lVq5rfFfBxkbVv7oDiPw',
                'created_at' => '2022-10-28 04:25:20',
                'updated_at' => '2022-10-28 04:25:20',
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offices')->delete();
        
        \DB::table('offices')->insert(array (
            0 => 
            array (
                'officeCode' => '1',
                'city' => 'San Francisco',
                'phone' => '+1 650 219 4782',
                'addressLine1' => '100 Market Street',
                'addressLine2' => 'Suite 300',
                'state' => 'CA',
                'country' => 'USA',
                'postalCode' => '94080',
                'territory' => 'NA',
            ),
            1 => 
            array (
                'officeCode' => '2',
                'city' => 'Boston',
                'phone' => '+1 215 837 0825',
                'addressLine1' => '1550 Court Place',
                'addressLine2' => 'Suite 102',
                'state' => 'MA',
                'country' => 'USA',
                'postalCode' => '02107',
                'territory' => 'NA',
            ),
            2 => 
            array (
                'officeCode' => '3',
                'city' => 'NYC',
                'phone' => '+1 212 555 3000',
                'addressLine1' => '523 East 53rd Street',
                'addressLine2' => 'apt. 5A',
                'state' => 'NY',
                'country' => 'USA',
                'postalCode' => '10022',
                'territory' => 'NA',
            ),
            3 => 
            array (
                'officeCode' => '4',
                'city' => 'Paris',
                'phone' => '+33 14 723 4404',
                'addressLine1' => '43 Rue Jouffroy D\'abbans',
                'addressLine2' => NULL,
                'state' => NULL,
                'country' => 'France',
                'postalCode' => '75017',
                'territory' => 'EMEA',
            ),
            4 => 
            array (
                'officeCode' => '5',
                'city' => 'Tokyo',
                'phone' => '+81 33 224 5000',
                'addressLine1' => '4-1 Kioicho',
                'addressLine2' => NULL,
                'state' => 'Chiyoda-Ku',
                'country' => 'Japan',
                'postalCode' => '102-8578',
                'territory' => 'Japan',
            ),
            5 => 
            array (
                'officeCode' => '6',
                'city' => 'Sydney',
                'phone' => '+61 2 9264 2451',
                'addressLine1' => '5-11 Wentworth Avenue',
                'addressLine2' => 'Floor #2',
                'state' => NULL,
                'country' => 'Australia',
                'postalCode' => 'NSW 2010',
                'territory' => 'APAC',
            ),
            6 => 
            array (
                'officeCode' => '7',
                'city' => 'London',
                'phone' => '+44 20 7877 2041',
                'addressLine1' => '25 Old Broad Street',
                'addressLine2' => 'Level 7',
                'state' => NULL,
                'country' => 'UK',
                'postalCode' => 'EC2N 1HN',
                'territory' => 'EMEA',
            ),
        ));
        
        
    }
}
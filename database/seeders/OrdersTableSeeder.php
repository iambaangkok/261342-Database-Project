<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'orderNumber' => 10100,
                'orderDate' => '2003-01-06',
                'requiredDate' => '2003-01-13',
                'shippedDate' => '2003-01-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 363,
            ),
            1 => 
            array (
                'orderNumber' => 10101,
                'orderDate' => '2003-01-09',
                'requiredDate' => '2003-01-18',
                'shippedDate' => '2003-01-11',
                'status' => 'Shipped',
                'comments' => 'Check on availability.',
                'customerNumber' => 128,
            ),
            2 => 
            array (
                'orderNumber' => 10102,
                'orderDate' => '2003-01-10',
                'requiredDate' => '2003-01-18',
                'shippedDate' => '2003-01-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 181,
            ),
            3 => 
            array (
                'orderNumber' => 10103,
                'orderDate' => '2003-01-29',
                'requiredDate' => '2003-02-07',
                'shippedDate' => '2003-02-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 121,
            ),
            4 => 
            array (
                'orderNumber' => 10104,
                'orderDate' => '2003-01-31',
                'requiredDate' => '2003-02-09',
                'shippedDate' => '2003-02-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            5 => 
            array (
                'orderNumber' => 10105,
                'orderDate' => '2003-02-11',
                'requiredDate' => '2003-02-21',
                'shippedDate' => '2003-02-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 145,
            ),
            6 => 
            array (
                'orderNumber' => 10106,
                'orderDate' => '2003-02-17',
                'requiredDate' => '2003-02-24',
                'shippedDate' => '2003-02-21',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 278,
            ),
            7 => 
            array (
                'orderNumber' => 10107,
                'orderDate' => '2003-02-24',
                'requiredDate' => '2003-03-03',
                'shippedDate' => '2003-02-26',
                'status' => 'Shipped',
                'comments' => 'Difficult to negotiate with customer. We need more marketing materials',
                'customerNumber' => 131,
            ),
            8 => 
            array (
                'orderNumber' => 10108,
                'orderDate' => '2003-03-03',
                'requiredDate' => '2003-03-12',
                'shippedDate' => '2003-03-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 385,
            ),
            9 => 
            array (
                'orderNumber' => 10109,
                'orderDate' => '2003-03-10',
                'requiredDate' => '2003-03-19',
                'shippedDate' => '2003-03-11',
                'status' => 'Shipped',
                'comments' => 'Customer requested that FedEx Ground is used for this shipping',
                'customerNumber' => 486,
            ),
            10 => 
            array (
                'orderNumber' => 10110,
                'orderDate' => '2003-03-18',
                'requiredDate' => '2003-03-24',
                'shippedDate' => '2003-03-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 187,
            ),
            11 => 
            array (
                'orderNumber' => 10111,
                'orderDate' => '2003-03-25',
                'requiredDate' => '2003-03-31',
                'shippedDate' => '2003-03-30',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 129,
            ),
            12 => 
            array (
                'orderNumber' => 10112,
                'orderDate' => '2003-03-24',
                'requiredDate' => '2003-04-03',
                'shippedDate' => '2003-03-29',
                'status' => 'Shipped',
            'comments' => 'Customer requested that ad materials (such as posters, pamphlets) be included in the shippment',
                'customerNumber' => 144,
            ),
            13 => 
            array (
                'orderNumber' => 10113,
                'orderDate' => '2003-03-26',
                'requiredDate' => '2003-04-02',
                'shippedDate' => '2003-03-27',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            14 => 
            array (
                'orderNumber' => 10114,
                'orderDate' => '2003-04-01',
                'requiredDate' => '2003-04-07',
                'shippedDate' => '2003-04-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 172,
            ),
            15 => 
            array (
                'orderNumber' => 10115,
                'orderDate' => '2003-04-04',
                'requiredDate' => '2003-04-12',
                'shippedDate' => '2003-04-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 424,
            ),
            16 => 
            array (
                'orderNumber' => 10116,
                'orderDate' => '2003-04-11',
                'requiredDate' => '2003-04-19',
                'shippedDate' => '2003-04-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 381,
            ),
            17 => 
            array (
                'orderNumber' => 10117,
                'orderDate' => '2003-04-16',
                'requiredDate' => '2003-04-24',
                'shippedDate' => '2003-04-17',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 148,
            ),
            18 => 
            array (
                'orderNumber' => 10118,
                'orderDate' => '2003-04-21',
                'requiredDate' => '2003-04-29',
                'shippedDate' => '2003-04-26',
                'status' => 'Shipped',
                'comments' => 'Customer has worked with some of our vendors in the past and is aware of their MSRP',
                'customerNumber' => 216,
            ),
            19 => 
            array (
                'orderNumber' => 10119,
                'orderDate' => '2003-04-28',
                'requiredDate' => '2003-05-05',
                'shippedDate' => '2003-05-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 382,
            ),
            20 => 
            array (
                'orderNumber' => 10120,
                'orderDate' => '2003-04-29',
                'requiredDate' => '2003-05-08',
                'shippedDate' => '2003-05-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 114,
            ),
            21 => 
            array (
                'orderNumber' => 10121,
                'orderDate' => '2003-05-07',
                'requiredDate' => '2003-05-13',
                'shippedDate' => '2003-05-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 353,
            ),
            22 => 
            array (
                'orderNumber' => 10122,
                'orderDate' => '2003-05-08',
                'requiredDate' => '2003-05-16',
                'shippedDate' => '2003-05-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 350,
            ),
            23 => 
            array (
                'orderNumber' => 10123,
                'orderDate' => '2003-05-20',
                'requiredDate' => '2003-05-29',
                'shippedDate' => '2003-05-22',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 103,
            ),
            24 => 
            array (
                'orderNumber' => 10124,
                'orderDate' => '2003-05-21',
                'requiredDate' => '2003-05-29',
                'shippedDate' => '2003-05-25',
                'status' => 'Shipped',
                'comments' => 'Customer very concerned about the exact color of the models. There is high risk that he may dispute the order because there is a slight color mismatch',
                'customerNumber' => 112,
            ),
            25 => 
            array (
                'orderNumber' => 10125,
                'orderDate' => '2003-05-21',
                'requiredDate' => '2003-05-27',
                'shippedDate' => '2003-05-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 114,
            ),
            26 => 
            array (
                'orderNumber' => 10126,
                'orderDate' => '2003-05-28',
                'requiredDate' => '2003-06-07',
                'shippedDate' => '2003-06-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 458,
            ),
            27 => 
            array (
                'orderNumber' => 10127,
                'orderDate' => '2003-06-03',
                'requiredDate' => '2003-06-09',
                'shippedDate' => '2003-06-06',
                'status' => 'Shipped',
                'comments' => 'Customer requested special shippment. The instructions were passed along to the warehouse',
                'customerNumber' => 151,
            ),
            28 => 
            array (
                'orderNumber' => 10128,
                'orderDate' => '2003-06-06',
                'requiredDate' => '2003-06-12',
                'shippedDate' => '2003-06-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            29 => 
            array (
                'orderNumber' => 10129,
                'orderDate' => '2003-06-12',
                'requiredDate' => '2003-06-18',
                'shippedDate' => '2003-06-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 324,
            ),
            30 => 
            array (
                'orderNumber' => 10130,
                'orderDate' => '2003-06-16',
                'requiredDate' => '2003-06-24',
                'shippedDate' => '2003-06-21',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 198,
            ),
            31 => 
            array (
                'orderNumber' => 10131,
                'orderDate' => '2003-06-16',
                'requiredDate' => '2003-06-25',
                'shippedDate' => '2003-06-21',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 447,
            ),
            32 => 
            array (
                'orderNumber' => 10132,
                'orderDate' => '2003-06-25',
                'requiredDate' => '2003-07-01',
                'shippedDate' => '2003-06-28',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 323,
            ),
            33 => 
            array (
                'orderNumber' => 10133,
                'orderDate' => '2003-06-27',
                'requiredDate' => '2003-07-04',
                'shippedDate' => '2003-07-03',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            34 => 
            array (
                'orderNumber' => 10134,
                'orderDate' => '2003-07-01',
                'requiredDate' => '2003-07-10',
                'shippedDate' => '2003-07-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 250,
            ),
            35 => 
            array (
                'orderNumber' => 10135,
                'orderDate' => '2003-07-02',
                'requiredDate' => '2003-07-12',
                'shippedDate' => '2003-07-03',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            36 => 
            array (
                'orderNumber' => 10136,
                'orderDate' => '2003-07-04',
                'requiredDate' => '2003-07-14',
                'shippedDate' => '2003-07-06',
                'status' => 'Shipped',
                'comments' => 'Customer is interested in buying more Ferrari models',
                'customerNumber' => 242,
            ),
            37 => 
            array (
                'orderNumber' => 10137,
                'orderDate' => '2003-07-10',
                'requiredDate' => '2003-07-20',
                'shippedDate' => '2003-07-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 353,
            ),
            38 => 
            array (
                'orderNumber' => 10138,
                'orderDate' => '2003-07-07',
                'requiredDate' => '2003-07-16',
                'shippedDate' => '2003-07-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 496,
            ),
            39 => 
            array (
                'orderNumber' => 10139,
                'orderDate' => '2003-07-16',
                'requiredDate' => '2003-07-23',
                'shippedDate' => '2003-07-21',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 282,
            ),
            40 => 
            array (
                'orderNumber' => 10140,
                'orderDate' => '2003-07-24',
                'requiredDate' => '2003-08-02',
                'shippedDate' => '2003-07-30',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 161,
            ),
            41 => 
            array (
                'orderNumber' => 10141,
                'orderDate' => '2003-08-01',
                'requiredDate' => '2003-08-09',
                'shippedDate' => '2003-08-04',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 334,
            ),
            42 => 
            array (
                'orderNumber' => 10142,
                'orderDate' => '2003-08-08',
                'requiredDate' => '2003-08-16',
                'shippedDate' => '2003-08-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            43 => 
            array (
                'orderNumber' => 10143,
                'orderDate' => '2003-08-10',
                'requiredDate' => '2003-08-18',
                'shippedDate' => '2003-08-12',
                'status' => 'Shipped',
                'comments' => 'Can we deliver the new Ford Mustang models by end-of-quarter?',
                'customerNumber' => 320,
            ),
            44 => 
            array (
                'orderNumber' => 10144,
                'orderDate' => '2003-08-13',
                'requiredDate' => '2003-08-21',
                'shippedDate' => '2003-08-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 381,
            ),
            45 => 
            array (
                'orderNumber' => 10145,
                'orderDate' => '2003-08-25',
                'requiredDate' => '2003-09-02',
                'shippedDate' => '2003-08-31',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 205,
            ),
            46 => 
            array (
                'orderNumber' => 10146,
                'orderDate' => '2003-09-03',
                'requiredDate' => '2003-09-13',
                'shippedDate' => '2003-09-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 447,
            ),
            47 => 
            array (
                'orderNumber' => 10147,
                'orderDate' => '2003-09-05',
                'requiredDate' => '2003-09-12',
                'shippedDate' => '2003-09-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 379,
            ),
            48 => 
            array (
                'orderNumber' => 10148,
                'orderDate' => '2003-09-11',
                'requiredDate' => '2003-09-21',
                'shippedDate' => '2003-09-15',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with Finance.',
                'customerNumber' => 276,
            ),
            49 => 
            array (
                'orderNumber' => 10149,
                'orderDate' => '2003-09-12',
                'requiredDate' => '2003-09-18',
                'shippedDate' => '2003-09-17',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 487,
            ),
            50 => 
            array (
                'orderNumber' => 10150,
                'orderDate' => '2003-09-19',
                'requiredDate' => '2003-09-27',
                'shippedDate' => '2003-09-21',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with Finance.',
                'customerNumber' => 148,
            ),
            51 => 
            array (
                'orderNumber' => 10151,
                'orderDate' => '2003-09-21',
                'requiredDate' => '2003-09-30',
                'shippedDate' => '2003-09-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 311,
            ),
            52 => 
            array (
                'orderNumber' => 10152,
                'orderDate' => '2003-09-25',
                'requiredDate' => '2003-10-03',
                'shippedDate' => '2003-10-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 333,
            ),
            53 => 
            array (
                'orderNumber' => 10153,
                'orderDate' => '2003-09-28',
                'requiredDate' => '2003-10-05',
                'shippedDate' => '2003-10-03',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            54 => 
            array (
                'orderNumber' => 10154,
                'orderDate' => '2003-10-02',
                'requiredDate' => '2003-10-12',
                'shippedDate' => '2003-10-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 219,
            ),
            55 => 
            array (
                'orderNumber' => 10155,
                'orderDate' => '2003-10-06',
                'requiredDate' => '2003-10-13',
                'shippedDate' => '2003-10-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 186,
            ),
            56 => 
            array (
                'orderNumber' => 10156,
                'orderDate' => '2003-10-08',
                'requiredDate' => '2003-10-17',
                'shippedDate' => '2003-10-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            57 => 
            array (
                'orderNumber' => 10157,
                'orderDate' => '2003-10-09',
                'requiredDate' => '2003-10-15',
                'shippedDate' => '2003-10-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 473,
            ),
            58 => 
            array (
                'orderNumber' => 10158,
                'orderDate' => '2003-10-10',
                'requiredDate' => '2003-10-18',
                'shippedDate' => '2003-10-15',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 121,
            ),
            59 => 
            array (
                'orderNumber' => 10159,
                'orderDate' => '2003-10-10',
                'requiredDate' => '2003-10-19',
                'shippedDate' => '2003-10-16',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 321,
            ),
            60 => 
            array (
                'orderNumber' => 10160,
                'orderDate' => '2003-10-11',
                'requiredDate' => '2003-10-17',
                'shippedDate' => '2003-10-17',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 347,
            ),
            61 => 
            array (
                'orderNumber' => 10161,
                'orderDate' => '2003-10-17',
                'requiredDate' => '2003-10-25',
                'shippedDate' => '2003-10-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 227,
            ),
            62 => 
            array (
                'orderNumber' => 10162,
                'orderDate' => '2003-10-18',
                'requiredDate' => '2003-10-26',
                'shippedDate' => '2003-10-19',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 321,
            ),
            63 => 
            array (
                'orderNumber' => 10163,
                'orderDate' => '2003-10-20',
                'requiredDate' => '2003-10-27',
                'shippedDate' => '2003-10-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 424,
            ),
            64 => 
            array (
                'orderNumber' => 10164,
                'orderDate' => '2003-10-21',
                'requiredDate' => '2003-10-30',
                'shippedDate' => '2003-10-23',
                'status' => 'Resolved',
                'comments' => 'This order was disputed, but resolved on 11/1/2003; Customer doesn\'t like the colors and precision of the models.',
                'customerNumber' => 452,
            ),
            65 => 
            array (
                'orderNumber' => 10165,
                'orderDate' => '2003-10-22',
                'requiredDate' => '2003-10-31',
                'shippedDate' => '2003-12-26',
                'status' => 'Shipped',
                'comments' => 'This order was on hold because customers\'s credit limit had been exceeded. Order will ship when payment is received',
                'customerNumber' => 148,
            ),
            66 => 
            array (
                'orderNumber' => 10166,
                'orderDate' => '2003-10-21',
                'requiredDate' => '2003-10-30',
                'shippedDate' => '2003-10-27',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 462,
            ),
            67 => 
            array (
                'orderNumber' => 10167,
                'orderDate' => '2003-10-23',
                'requiredDate' => '2003-10-30',
                'shippedDate' => NULL,
                'status' => 'Cancelled',
                'comments' => 'Customer called to cancel. The warehouse was notified in time and the order didn\'t ship. They have a new VP of Sales and are shifting their sales model. Our VP of Sales should contact them.',
                'customerNumber' => 448,
            ),
            68 => 
            array (
                'orderNumber' => 10168,
                'orderDate' => '2003-10-28',
                'requiredDate' => '2003-11-03',
                'shippedDate' => '2003-11-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 161,
            ),
            69 => 
            array (
                'orderNumber' => 10169,
                'orderDate' => '2003-11-04',
                'requiredDate' => '2003-11-14',
                'shippedDate' => '2003-11-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 276,
            ),
            70 => 
            array (
                'orderNumber' => 10170,
                'orderDate' => '2003-11-04',
                'requiredDate' => '2003-11-12',
                'shippedDate' => '2003-11-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 452,
            ),
            71 => 
            array (
                'orderNumber' => 10171,
                'orderDate' => '2003-11-05',
                'requiredDate' => '2003-11-13',
                'shippedDate' => '2003-11-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 233,
            ),
            72 => 
            array (
                'orderNumber' => 10172,
                'orderDate' => '2003-11-05',
                'requiredDate' => '2003-11-14',
                'shippedDate' => '2003-11-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 175,
            ),
            73 => 
            array (
                'orderNumber' => 10173,
                'orderDate' => '2003-11-05',
                'requiredDate' => '2003-11-15',
                'shippedDate' => '2003-11-09',
                'status' => 'Shipped',
                'comments' => 'Cautious optimism. We have happy customers here, if we can keep them well stocked.  I need all the information I can get on the planned shippments of Porches',
                'customerNumber' => 278,
            ),
            74 => 
            array (
                'orderNumber' => 10174,
                'orderDate' => '2003-11-06',
                'requiredDate' => '2003-11-15',
                'shippedDate' => '2003-11-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 333,
            ),
            75 => 
            array (
                'orderNumber' => 10175,
                'orderDate' => '2003-11-06',
                'requiredDate' => '2003-11-14',
                'shippedDate' => '2003-11-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 324,
            ),
            76 => 
            array (
                'orderNumber' => 10176,
                'orderDate' => '2003-11-06',
                'requiredDate' => '2003-11-15',
                'shippedDate' => '2003-11-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 386,
            ),
            77 => 
            array (
                'orderNumber' => 10177,
                'orderDate' => '2003-11-07',
                'requiredDate' => '2003-11-17',
                'shippedDate' => '2003-11-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 344,
            ),
            78 => 
            array (
                'orderNumber' => 10178,
                'orderDate' => '2003-11-08',
                'requiredDate' => '2003-11-16',
                'shippedDate' => '2003-11-10',
                'status' => 'Shipped',
                'comments' => 'Custom shipping instructions sent to warehouse',
                'customerNumber' => 242,
            ),
            79 => 
            array (
                'orderNumber' => 10179,
                'orderDate' => '2003-11-11',
                'requiredDate' => '2003-11-17',
                'shippedDate' => '2003-11-13',
                'status' => 'Cancelled',
                'comments' => 'Customer cancelled due to urgent budgeting issues. Must be cautious when dealing with them in the future. Since order shipped already we must discuss who would cover the shipping charges.',
                'customerNumber' => 496,
            ),
            80 => 
            array (
                'orderNumber' => 10180,
                'orderDate' => '2003-11-11',
                'requiredDate' => '2003-11-19',
                'shippedDate' => '2003-11-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 171,
            ),
            81 => 
            array (
                'orderNumber' => 10181,
                'orderDate' => '2003-11-12',
                'requiredDate' => '2003-11-19',
                'shippedDate' => '2003-11-15',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 167,
            ),
            82 => 
            array (
                'orderNumber' => 10182,
                'orderDate' => '2003-11-12',
                'requiredDate' => '2003-11-21',
                'shippedDate' => '2003-11-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            83 => 
            array (
                'orderNumber' => 10183,
                'orderDate' => '2003-11-13',
                'requiredDate' => '2003-11-22',
                'shippedDate' => '2003-11-15',
                'status' => 'Shipped',
                'comments' => 'We need to keep in close contact with their Marketing VP. He is the decision maker for all their purchases.',
                'customerNumber' => 339,
            ),
            84 => 
            array (
                'orderNumber' => 10184,
                'orderDate' => '2003-11-14',
                'requiredDate' => '2003-11-22',
                'shippedDate' => '2003-11-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 484,
            ),
            85 => 
            array (
                'orderNumber' => 10185,
                'orderDate' => '2003-11-14',
                'requiredDate' => '2003-11-21',
                'shippedDate' => '2003-11-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 320,
            ),
            86 => 
            array (
                'orderNumber' => 10186,
                'orderDate' => '2003-11-14',
                'requiredDate' => '2003-11-20',
                'shippedDate' => '2003-11-18',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with the VP of Sales',
                'customerNumber' => 489,
            ),
            87 => 
            array (
                'orderNumber' => 10187,
                'orderDate' => '2003-11-15',
                'requiredDate' => '2003-11-24',
                'shippedDate' => '2003-11-16',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 211,
            ),
            88 => 
            array (
                'orderNumber' => 10188,
                'orderDate' => '2003-11-18',
                'requiredDate' => '2003-11-26',
                'shippedDate' => '2003-11-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 167,
            ),
            89 => 
            array (
                'orderNumber' => 10189,
                'orderDate' => '2003-11-18',
                'requiredDate' => '2003-11-25',
                'shippedDate' => '2003-11-24',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with Finance.',
                'customerNumber' => 205,
            ),
            90 => 
            array (
                'orderNumber' => 10190,
                'orderDate' => '2003-11-19',
                'requiredDate' => '2003-11-29',
                'shippedDate' => '2003-11-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            91 => 
            array (
                'orderNumber' => 10191,
                'orderDate' => '2003-11-20',
                'requiredDate' => '2003-11-30',
                'shippedDate' => '2003-11-24',
                'status' => 'Shipped',
                'comments' => 'We must be cautions with this customer. Their VP of Sales resigned. Company may be heading down.',
                'customerNumber' => 259,
            ),
            92 => 
            array (
                'orderNumber' => 10192,
                'orderDate' => '2003-11-20',
                'requiredDate' => '2003-11-29',
                'shippedDate' => '2003-11-25',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 363,
            ),
            93 => 
            array (
                'orderNumber' => 10193,
                'orderDate' => '2003-11-21',
                'requiredDate' => '2003-11-28',
                'shippedDate' => '2003-11-27',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 471,
            ),
            94 => 
            array (
                'orderNumber' => 10194,
                'orderDate' => '2003-11-25',
                'requiredDate' => '2003-12-02',
                'shippedDate' => '2003-11-26',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 146,
            ),
            95 => 
            array (
                'orderNumber' => 10195,
                'orderDate' => '2003-11-25',
                'requiredDate' => '2003-12-01',
                'shippedDate' => '2003-11-28',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 319,
            ),
            96 => 
            array (
                'orderNumber' => 10196,
                'orderDate' => '2003-11-26',
                'requiredDate' => '2003-12-03',
                'shippedDate' => '2003-12-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 455,
            ),
            97 => 
            array (
                'orderNumber' => 10197,
                'orderDate' => '2003-11-26',
                'requiredDate' => '2003-12-02',
                'shippedDate' => '2003-12-01',
                'status' => 'Shipped',
                'comments' => 'Customer inquired about remote controlled models and gold models.',
                'customerNumber' => 216,
            ),
            98 => 
            array (
                'orderNumber' => 10198,
                'orderDate' => '2003-11-27',
                'requiredDate' => '2003-12-06',
                'shippedDate' => '2003-12-03',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 385,
            ),
            99 => 
            array (
                'orderNumber' => 10199,
                'orderDate' => '2003-12-01',
                'requiredDate' => '2003-12-10',
                'shippedDate' => '2003-12-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 475,
            ),
            100 => 
            array (
                'orderNumber' => 10200,
                'orderDate' => '2003-12-01',
                'requiredDate' => '2003-12-09',
                'shippedDate' => '2003-12-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 211,
            ),
            101 => 
            array (
                'orderNumber' => 10201,
                'orderDate' => '2003-12-01',
                'requiredDate' => '2003-12-11',
                'shippedDate' => '2003-12-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 129,
            ),
            102 => 
            array (
                'orderNumber' => 10202,
                'orderDate' => '2003-12-02',
                'requiredDate' => '2003-12-09',
                'shippedDate' => '2003-12-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 357,
            ),
            103 => 
            array (
                'orderNumber' => 10203,
                'orderDate' => '2003-12-02',
                'requiredDate' => '2003-12-11',
                'shippedDate' => '2003-12-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            104 => 
            array (
                'orderNumber' => 10204,
                'orderDate' => '2003-12-02',
                'requiredDate' => '2003-12-10',
                'shippedDate' => '2003-12-04',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 151,
            ),
            105 => 
            array (
                'orderNumber' => 10205,
                'orderDate' => '2003-12-03',
                'requiredDate' => '2003-12-09',
                'shippedDate' => '2003-12-07',
                'status' => 'Shipped',
                'comments' => ' I need all the information I can get on our competitors.',
                'customerNumber' => 141,
            ),
            106 => 
            array (
                'orderNumber' => 10206,
                'orderDate' => '2003-12-05',
                'requiredDate' => '2003-12-13',
                'shippedDate' => '2003-12-08',
                'status' => 'Shipped',
                'comments' => 'Can we renegotiate this one?',
                'customerNumber' => 202,
            ),
            107 => 
            array (
                'orderNumber' => 10207,
                'orderDate' => '2003-12-09',
                'requiredDate' => '2003-12-17',
                'shippedDate' => '2003-12-11',
                'status' => 'Shipped',
                'comments' => 'Check on availability.',
                'customerNumber' => 495,
            ),
            108 => 
            array (
                'orderNumber' => 10208,
                'orderDate' => '2004-01-02',
                'requiredDate' => '2004-01-11',
                'shippedDate' => '2004-01-04',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 146,
            ),
            109 => 
            array (
                'orderNumber' => 10209,
                'orderDate' => '2004-01-09',
                'requiredDate' => '2004-01-15',
                'shippedDate' => '2004-01-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 347,
            ),
            110 => 
            array (
                'orderNumber' => 10210,
                'orderDate' => '2004-01-12',
                'requiredDate' => '2004-01-22',
                'shippedDate' => '2004-01-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 177,
            ),
            111 => 
            array (
                'orderNumber' => 10211,
                'orderDate' => '2004-01-15',
                'requiredDate' => '2004-01-25',
                'shippedDate' => '2004-01-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 406,
            ),
            112 => 
            array (
                'orderNumber' => 10212,
                'orderDate' => '2004-01-16',
                'requiredDate' => '2004-01-24',
                'shippedDate' => '2004-01-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            113 => 
            array (
                'orderNumber' => 10213,
                'orderDate' => '2004-01-22',
                'requiredDate' => '2004-01-28',
                'shippedDate' => '2004-01-27',
                'status' => 'Shipped',
                'comments' => 'Difficult to negotiate with customer. We need more marketing materials',
                'customerNumber' => 489,
            ),
            114 => 
            array (
                'orderNumber' => 10214,
                'orderDate' => '2004-01-26',
                'requiredDate' => '2004-02-04',
                'shippedDate' => '2004-01-29',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 458,
            ),
            115 => 
            array (
                'orderNumber' => 10215,
                'orderDate' => '2004-01-29',
                'requiredDate' => '2004-02-08',
                'shippedDate' => '2004-02-01',
                'status' => 'Shipped',
                'comments' => 'Customer requested that FedEx Ground is used for this shipping',
                'customerNumber' => 475,
            ),
            116 => 
            array (
                'orderNumber' => 10216,
                'orderDate' => '2004-02-02',
                'requiredDate' => '2004-02-10',
                'shippedDate' => '2004-02-04',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 256,
            ),
            117 => 
            array (
                'orderNumber' => 10217,
                'orderDate' => '2004-02-04',
                'requiredDate' => '2004-02-14',
                'shippedDate' => '2004-02-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 166,
            ),
            118 => 
            array (
                'orderNumber' => 10218,
                'orderDate' => '2004-02-09',
                'requiredDate' => '2004-02-16',
                'shippedDate' => '2004-02-11',
                'status' => 'Shipped',
            'comments' => 'Customer requested that ad materials (such as posters, pamphlets) be included in the shippment',
                'customerNumber' => 473,
            ),
            119 => 
            array (
                'orderNumber' => 10219,
                'orderDate' => '2004-02-10',
                'requiredDate' => '2004-02-17',
                'shippedDate' => '2004-02-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 487,
            ),
            120 => 
            array (
                'orderNumber' => 10220,
                'orderDate' => '2004-02-12',
                'requiredDate' => '2004-02-19',
                'shippedDate' => '2004-02-16',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 189,
            ),
            121 => 
            array (
                'orderNumber' => 10221,
                'orderDate' => '2004-02-18',
                'requiredDate' => '2004-02-26',
                'shippedDate' => '2004-02-19',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 314,
            ),
            122 => 
            array (
                'orderNumber' => 10222,
                'orderDate' => '2004-02-19',
                'requiredDate' => '2004-02-27',
                'shippedDate' => '2004-02-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 239,
            ),
            123 => 
            array (
                'orderNumber' => 10223,
                'orderDate' => '2004-02-20',
                'requiredDate' => '2004-02-29',
                'shippedDate' => '2004-02-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 114,
            ),
            124 => 
            array (
                'orderNumber' => 10224,
                'orderDate' => '2004-02-21',
                'requiredDate' => '2004-03-02',
                'shippedDate' => '2004-02-26',
                'status' => 'Shipped',
                'comments' => 'Customer has worked with some of our vendors in the past and is aware of their MSRP',
                'customerNumber' => 171,
            ),
            125 => 
            array (
                'orderNumber' => 10225,
                'orderDate' => '2004-02-22',
                'requiredDate' => '2004-03-01',
                'shippedDate' => '2004-02-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 298,
            ),
            126 => 
            array (
                'orderNumber' => 10226,
                'orderDate' => '2004-02-26',
                'requiredDate' => '2004-03-06',
                'shippedDate' => '2004-03-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 239,
            ),
            127 => 
            array (
                'orderNumber' => 10227,
                'orderDate' => '2004-03-02',
                'requiredDate' => '2004-03-12',
                'shippedDate' => '2004-03-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 146,
            ),
            128 => 
            array (
                'orderNumber' => 10228,
                'orderDate' => '2004-03-10',
                'requiredDate' => '2004-03-18',
                'shippedDate' => '2004-03-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 173,
            ),
            129 => 
            array (
                'orderNumber' => 10229,
                'orderDate' => '2004-03-11',
                'requiredDate' => '2004-03-20',
                'shippedDate' => '2004-03-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            130 => 
            array (
                'orderNumber' => 10230,
                'orderDate' => '2004-03-15',
                'requiredDate' => '2004-03-24',
                'shippedDate' => '2004-03-20',
                'status' => 'Shipped',
                'comments' => 'Customer very concerned about the exact color of the models. There is high risk that he may dispute the order because there is a slight color mismatch',
                'customerNumber' => 128,
            ),
            131 => 
            array (
                'orderNumber' => 10231,
                'orderDate' => '2004-03-19',
                'requiredDate' => '2004-03-26',
                'shippedDate' => '2004-03-25',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 344,
            ),
            132 => 
            array (
                'orderNumber' => 10232,
                'orderDate' => '2004-03-20',
                'requiredDate' => '2004-03-30',
                'shippedDate' => '2004-03-25',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 240,
            ),
            133 => 
            array (
                'orderNumber' => 10233,
                'orderDate' => '2004-03-29',
                'requiredDate' => '2004-04-04',
                'shippedDate' => '2004-04-02',
                'status' => 'Shipped',
                'comments' => 'Customer requested special shippment. The instructions were passed along to the warehouse',
                'customerNumber' => 328,
            ),
            134 => 
            array (
                'orderNumber' => 10234,
                'orderDate' => '2004-03-30',
                'requiredDate' => '2004-04-05',
                'shippedDate' => '2004-04-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 412,
            ),
            135 => 
            array (
                'orderNumber' => 10235,
                'orderDate' => '2004-04-02',
                'requiredDate' => '2004-04-12',
                'shippedDate' => '2004-04-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 260,
            ),
            136 => 
            array (
                'orderNumber' => 10236,
                'orderDate' => '2004-04-03',
                'requiredDate' => '2004-04-11',
                'shippedDate' => '2004-04-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 486,
            ),
            137 => 
            array (
                'orderNumber' => 10237,
                'orderDate' => '2004-04-05',
                'requiredDate' => '2004-04-12',
                'shippedDate' => '2004-04-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 181,
            ),
            138 => 
            array (
                'orderNumber' => 10238,
                'orderDate' => '2004-04-09',
                'requiredDate' => '2004-04-16',
                'shippedDate' => '2004-04-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 145,
            ),
            139 => 
            array (
                'orderNumber' => 10239,
                'orderDate' => '2004-04-12',
                'requiredDate' => '2004-04-21',
                'shippedDate' => '2004-04-17',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 311,
            ),
            140 => 
            array (
                'orderNumber' => 10240,
                'orderDate' => '2004-04-13',
                'requiredDate' => '2004-04-20',
                'shippedDate' => '2004-04-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 177,
            ),
            141 => 
            array (
                'orderNumber' => 10241,
                'orderDate' => '2004-04-13',
                'requiredDate' => '2004-04-20',
                'shippedDate' => '2004-04-19',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 209,
            ),
            142 => 
            array (
                'orderNumber' => 10242,
                'orderDate' => '2004-04-20',
                'requiredDate' => '2004-04-28',
                'shippedDate' => '2004-04-25',
                'status' => 'Shipped',
                'comments' => 'Customer is interested in buying more Ferrari models',
                'customerNumber' => 456,
            ),
            143 => 
            array (
                'orderNumber' => 10243,
                'orderDate' => '2004-04-26',
                'requiredDate' => '2004-05-03',
                'shippedDate' => '2004-04-28',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 495,
            ),
            144 => 
            array (
                'orderNumber' => 10244,
                'orderDate' => '2004-04-29',
                'requiredDate' => '2004-05-09',
                'shippedDate' => '2004-05-04',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            145 => 
            array (
                'orderNumber' => 10245,
                'orderDate' => '2004-05-04',
                'requiredDate' => '2004-05-12',
                'shippedDate' => '2004-05-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 455,
            ),
            146 => 
            array (
                'orderNumber' => 10246,
                'orderDate' => '2004-05-05',
                'requiredDate' => '2004-05-13',
                'shippedDate' => '2004-05-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            147 => 
            array (
                'orderNumber' => 10247,
                'orderDate' => '2004-05-05',
                'requiredDate' => '2004-05-11',
                'shippedDate' => '2004-05-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 334,
            ),
            148 => 
            array (
                'orderNumber' => 10248,
                'orderDate' => '2004-05-07',
                'requiredDate' => '2004-05-14',
                'shippedDate' => NULL,
                'status' => 'Cancelled',
                'comments' => 'Order was mistakenly placed. The warehouse noticed the lack of documentation.',
                'customerNumber' => 131,
            ),
            149 => 
            array (
                'orderNumber' => 10249,
                'orderDate' => '2004-05-08',
                'requiredDate' => '2004-05-17',
                'shippedDate' => '2004-05-11',
                'status' => 'Shipped',
                'comments' => 'Can we deliver the new Ford Mustang models by end-of-quarter?',
                'customerNumber' => 173,
            ),
            150 => 
            array (
                'orderNumber' => 10250,
                'orderDate' => '2004-05-11',
                'requiredDate' => '2004-05-19',
                'shippedDate' => '2004-05-15',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 450,
            ),
            151 => 
            array (
                'orderNumber' => 10251,
                'orderDate' => '2004-05-18',
                'requiredDate' => '2004-05-24',
                'shippedDate' => '2004-05-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 328,
            ),
            152 => 
            array (
                'orderNumber' => 10252,
                'orderDate' => '2004-05-26',
                'requiredDate' => '2004-06-04',
                'shippedDate' => '2004-05-29',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 406,
            ),
            153 => 
            array (
                'orderNumber' => 10253,
                'orderDate' => '2004-06-01',
                'requiredDate' => '2004-06-09',
                'shippedDate' => '2004-06-02',
                'status' => 'Cancelled',
                'comments' => 'Customer disputed the order and we agreed to cancel it. We must be more cautions with this customer going forward, since they are very hard to please. We must cover the shipping fees.',
                'customerNumber' => 201,
            ),
            154 => 
            array (
                'orderNumber' => 10254,
                'orderDate' => '2004-06-03',
                'requiredDate' => '2004-06-13',
                'shippedDate' => '2004-06-04',
                'status' => 'Shipped',
                'comments' => 'Customer requested that DHL is used for this shipping',
                'customerNumber' => 323,
            ),
            155 => 
            array (
                'orderNumber' => 10255,
                'orderDate' => '2004-06-04',
                'requiredDate' => '2004-06-12',
                'shippedDate' => '2004-06-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 209,
            ),
            156 => 
            array (
                'orderNumber' => 10256,
                'orderDate' => '2004-06-08',
                'requiredDate' => '2004-06-16',
                'shippedDate' => '2004-06-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 145,
            ),
            157 => 
            array (
                'orderNumber' => 10257,
                'orderDate' => '2004-06-14',
                'requiredDate' => '2004-06-24',
                'shippedDate' => '2004-06-15',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 450,
            ),
            158 => 
            array (
                'orderNumber' => 10258,
                'orderDate' => '2004-06-15',
                'requiredDate' => '2004-06-25',
                'shippedDate' => '2004-06-23',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 398,
            ),
            159 => 
            array (
                'orderNumber' => 10259,
                'orderDate' => '2004-06-15',
                'requiredDate' => '2004-06-22',
                'shippedDate' => '2004-06-17',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 166,
            ),
            160 => 
            array (
                'orderNumber' => 10260,
                'orderDate' => '2004-06-16',
                'requiredDate' => '2004-06-22',
                'shippedDate' => NULL,
                'status' => 'Cancelled',
                'comments' => 'Customer heard complaints from their customers and called to cancel this order. Will notify the Sales Manager.',
                'customerNumber' => 357,
            ),
            161 => 
            array (
                'orderNumber' => 10261,
                'orderDate' => '2004-06-17',
                'requiredDate' => '2004-06-25',
                'shippedDate' => '2004-06-22',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 233,
            ),
            162 => 
            array (
                'orderNumber' => 10262,
                'orderDate' => '2004-06-24',
                'requiredDate' => '2004-07-01',
                'shippedDate' => NULL,
                'status' => 'Cancelled',
                'comments' => 'This customer found a better offer from one of our competitors. Will call back to renegotiate.',
                'customerNumber' => 141,
            ),
            163 => 
            array (
                'orderNumber' => 10263,
                'orderDate' => '2004-06-28',
                'requiredDate' => '2004-07-04',
                'shippedDate' => '2004-07-02',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 175,
            ),
            164 => 
            array (
                'orderNumber' => 10264,
                'orderDate' => '2004-06-30',
                'requiredDate' => '2004-07-06',
                'shippedDate' => '2004-07-01',
                'status' => 'Shipped',
                'comments' => 'Customer will send a truck to our local warehouse on 7/1/2004',
                'customerNumber' => 362,
            ),
            165 => 
            array (
                'orderNumber' => 10265,
                'orderDate' => '2004-07-02',
                'requiredDate' => '2004-07-09',
                'shippedDate' => '2004-07-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 471,
            ),
            166 => 
            array (
                'orderNumber' => 10266,
                'orderDate' => '2004-07-06',
                'requiredDate' => '2004-07-14',
                'shippedDate' => '2004-07-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 386,
            ),
            167 => 
            array (
                'orderNumber' => 10267,
                'orderDate' => '2004-07-07',
                'requiredDate' => '2004-07-17',
                'shippedDate' => '2004-07-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 151,
            ),
            168 => 
            array (
                'orderNumber' => 10268,
                'orderDate' => '2004-07-12',
                'requiredDate' => '2004-07-18',
                'shippedDate' => '2004-07-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 412,
            ),
            169 => 
            array (
                'orderNumber' => 10269,
                'orderDate' => '2004-07-16',
                'requiredDate' => '2004-07-22',
                'shippedDate' => '2004-07-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 382,
            ),
            170 => 
            array (
                'orderNumber' => 10270,
                'orderDate' => '2004-07-19',
                'requiredDate' => '2004-07-27',
                'shippedDate' => '2004-07-24',
                'status' => 'Shipped',
                'comments' => 'Can we renegotiate this one?',
                'customerNumber' => 282,
            ),
            171 => 
            array (
                'orderNumber' => 10271,
                'orderDate' => '2004-07-20',
                'requiredDate' => '2004-07-29',
                'shippedDate' => '2004-07-23',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            172 => 
            array (
                'orderNumber' => 10272,
                'orderDate' => '2004-07-20',
                'requiredDate' => '2004-07-26',
                'shippedDate' => '2004-07-22',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 157,
            ),
            173 => 
            array (
                'orderNumber' => 10273,
                'orderDate' => '2004-07-21',
                'requiredDate' => '2004-07-28',
                'shippedDate' => '2004-07-22',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 314,
            ),
            174 => 
            array (
                'orderNumber' => 10274,
                'orderDate' => '2004-07-21',
                'requiredDate' => '2004-07-29',
                'shippedDate' => '2004-07-22',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 379,
            ),
            175 => 
            array (
                'orderNumber' => 10275,
                'orderDate' => '2004-07-23',
                'requiredDate' => '2004-08-02',
                'shippedDate' => '2004-07-29',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 119,
            ),
            176 => 
            array (
                'orderNumber' => 10276,
                'orderDate' => '2004-08-02',
                'requiredDate' => '2004-08-11',
                'shippedDate' => '2004-08-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 204,
            ),
            177 => 
            array (
                'orderNumber' => 10277,
                'orderDate' => '2004-08-04',
                'requiredDate' => '2004-08-12',
                'shippedDate' => '2004-08-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 148,
            ),
            178 => 
            array (
                'orderNumber' => 10278,
                'orderDate' => '2004-08-06',
                'requiredDate' => '2004-08-16',
                'shippedDate' => '2004-08-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 112,
            ),
            179 => 
            array (
                'orderNumber' => 10279,
                'orderDate' => '2004-08-09',
                'requiredDate' => '2004-08-19',
                'shippedDate' => '2004-08-15',
                'status' => 'Shipped',
                'comments' => 'Cautious optimism. We have happy customers here, if we can keep them well stocked.  I need all the information I can get on the planned shippments of Porches',
                'customerNumber' => 141,
            ),
            180 => 
            array (
                'orderNumber' => 10280,
                'orderDate' => '2004-08-17',
                'requiredDate' => '2004-08-27',
                'shippedDate' => '2004-08-19',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 249,
            ),
            181 => 
            array (
                'orderNumber' => 10281,
                'orderDate' => '2004-08-19',
                'requiredDate' => '2004-08-28',
                'shippedDate' => '2004-08-23',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 157,
            ),
            182 => 
            array (
                'orderNumber' => 10282,
                'orderDate' => '2004-08-20',
                'requiredDate' => '2004-08-26',
                'shippedDate' => '2004-08-22',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            183 => 
            array (
                'orderNumber' => 10283,
                'orderDate' => '2004-08-20',
                'requiredDate' => '2004-08-30',
                'shippedDate' => '2004-08-23',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 260,
            ),
            184 => 
            array (
                'orderNumber' => 10284,
                'orderDate' => '2004-08-21',
                'requiredDate' => '2004-08-29',
                'shippedDate' => '2004-08-26',
                'status' => 'Shipped',
                'comments' => 'Custom shipping instructions sent to warehouse',
                'customerNumber' => 299,
            ),
            185 => 
            array (
                'orderNumber' => 10285,
                'orderDate' => '2004-08-27',
                'requiredDate' => '2004-09-04',
                'shippedDate' => '2004-08-31',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 286,
            ),
            186 => 
            array (
                'orderNumber' => 10286,
                'orderDate' => '2004-08-28',
                'requiredDate' => '2004-09-06',
                'shippedDate' => '2004-09-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 172,
            ),
            187 => 
            array (
                'orderNumber' => 10287,
                'orderDate' => '2004-08-30',
                'requiredDate' => '2004-09-06',
                'shippedDate' => '2004-09-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 298,
            ),
            188 => 
            array (
                'orderNumber' => 10288,
                'orderDate' => '2004-09-01',
                'requiredDate' => '2004-09-11',
                'shippedDate' => '2004-09-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 166,
            ),
            189 => 
            array (
                'orderNumber' => 10289,
                'orderDate' => '2004-09-03',
                'requiredDate' => '2004-09-13',
                'shippedDate' => '2004-09-04',
                'status' => 'Shipped',
                'comments' => 'We need to keep in close contact with their Marketing VP. He is the decision maker for all their purchases.',
                'customerNumber' => 167,
            ),
            190 => 
            array (
                'orderNumber' => 10290,
                'orderDate' => '2004-09-07',
                'requiredDate' => '2004-09-15',
                'shippedDate' => '2004-09-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 198,
            ),
            191 => 
            array (
                'orderNumber' => 10291,
                'orderDate' => '2004-09-08',
                'requiredDate' => '2004-09-17',
                'shippedDate' => '2004-09-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 448,
            ),
            192 => 
            array (
                'orderNumber' => 10292,
                'orderDate' => '2004-09-08',
                'requiredDate' => '2004-09-18',
                'shippedDate' => '2004-09-11',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with Finance.',
                'customerNumber' => 131,
            ),
            193 => 
            array (
                'orderNumber' => 10293,
                'orderDate' => '2004-09-09',
                'requiredDate' => '2004-09-18',
                'shippedDate' => '2004-09-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 249,
            ),
            194 => 
            array (
                'orderNumber' => 10294,
                'orderDate' => '2004-09-10',
                'requiredDate' => '2004-09-17',
                'shippedDate' => '2004-09-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 204,
            ),
            195 => 
            array (
                'orderNumber' => 10295,
                'orderDate' => '2004-09-10',
                'requiredDate' => '2004-09-17',
                'shippedDate' => '2004-09-14',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with Finance.',
                'customerNumber' => 362,
            ),
            196 => 
            array (
                'orderNumber' => 10296,
                'orderDate' => '2004-09-15',
                'requiredDate' => '2004-09-22',
                'shippedDate' => '2004-09-16',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 415,
            ),
            197 => 
            array (
                'orderNumber' => 10297,
                'orderDate' => '2004-09-16',
                'requiredDate' => '2004-09-22',
                'shippedDate' => '2004-09-21',
                'status' => 'Shipped',
                'comments' => 'We must be cautions with this customer. Their VP of Sales resigned. Company may be heading down.',
                'customerNumber' => 189,
            ),
            198 => 
            array (
                'orderNumber' => 10298,
                'orderDate' => '2004-09-27',
                'requiredDate' => '2004-10-05',
                'shippedDate' => '2004-10-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 103,
            ),
            199 => 
            array (
                'orderNumber' => 10299,
                'orderDate' => '2004-09-30',
                'requiredDate' => '2004-10-10',
                'shippedDate' => '2004-10-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 186,
            ),
            200 => 
            array (
                'orderNumber' => 10300,
                'orderDate' => '2003-10-04',
                'requiredDate' => '2003-10-13',
                'shippedDate' => '2003-10-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 128,
            ),
            201 => 
            array (
                'orderNumber' => 10301,
                'orderDate' => '2003-10-05',
                'requiredDate' => '2003-10-15',
                'shippedDate' => '2003-10-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 299,
            ),
            202 => 
            array (
                'orderNumber' => 10302,
                'orderDate' => '2003-10-06',
                'requiredDate' => '2003-10-16',
                'shippedDate' => '2003-10-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 201,
            ),
            203 => 
            array (
                'orderNumber' => 10303,
                'orderDate' => '2004-10-06',
                'requiredDate' => '2004-10-14',
                'shippedDate' => '2004-10-09',
                'status' => 'Shipped',
                'comments' => 'Customer inquired about remote controlled models and gold models.',
                'customerNumber' => 484,
            ),
            204 => 
            array (
                'orderNumber' => 10304,
                'orderDate' => '2004-10-11',
                'requiredDate' => '2004-10-20',
                'shippedDate' => '2004-10-17',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 256,
            ),
            205 => 
            array (
                'orderNumber' => 10305,
                'orderDate' => '2004-10-13',
                'requiredDate' => '2004-10-22',
                'shippedDate' => '2004-10-15',
                'status' => 'Shipped',
                'comments' => 'Check on availability.',
                'customerNumber' => 286,
            ),
            206 => 
            array (
                'orderNumber' => 10306,
                'orderDate' => '2004-10-14',
                'requiredDate' => '2004-10-21',
                'shippedDate' => '2004-10-17',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 187,
            ),
            207 => 
            array (
                'orderNumber' => 10307,
                'orderDate' => '2004-10-14',
                'requiredDate' => '2004-10-23',
                'shippedDate' => '2004-10-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 339,
            ),
            208 => 
            array (
                'orderNumber' => 10308,
                'orderDate' => '2004-10-15',
                'requiredDate' => '2004-10-24',
                'shippedDate' => '2004-10-20',
                'status' => 'Shipped',
                'comments' => 'Customer requested that FedEx Ground is used for this shipping',
                'customerNumber' => 319,
            ),
            209 => 
            array (
                'orderNumber' => 10309,
                'orderDate' => '2004-10-15',
                'requiredDate' => '2004-10-24',
                'shippedDate' => '2004-10-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 121,
            ),
            210 => 
            array (
                'orderNumber' => 10310,
                'orderDate' => '2004-10-16',
                'requiredDate' => '2004-10-24',
                'shippedDate' => '2004-10-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 259,
            ),
            211 => 
            array (
                'orderNumber' => 10311,
                'orderDate' => '2004-10-16',
                'requiredDate' => '2004-10-23',
                'shippedDate' => '2004-10-20',
                'status' => 'Shipped',
                'comments' => 'Difficult to negotiate with customer. We need more marketing materials',
                'customerNumber' => 141,
            ),
            212 => 
            array (
                'orderNumber' => 10312,
                'orderDate' => '2004-10-21',
                'requiredDate' => '2004-10-27',
                'shippedDate' => '2004-10-23',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            213 => 
            array (
                'orderNumber' => 10313,
                'orderDate' => '2004-10-22',
                'requiredDate' => '2004-10-28',
                'shippedDate' => '2004-10-25',
                'status' => 'Shipped',
                'comments' => 'Customer requested that FedEx Ground is used for this shipping',
                'customerNumber' => 202,
            ),
            214 => 
            array (
                'orderNumber' => 10314,
                'orderDate' => '2004-10-22',
                'requiredDate' => '2004-11-01',
                'shippedDate' => '2004-10-23',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 227,
            ),
            215 => 
            array (
                'orderNumber' => 10315,
                'orderDate' => '2004-10-29',
                'requiredDate' => '2004-11-08',
                'shippedDate' => '2004-10-30',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 119,
            ),
            216 => 
            array (
                'orderNumber' => 10316,
                'orderDate' => '2004-11-01',
                'requiredDate' => '2004-11-09',
                'shippedDate' => '2004-11-07',
                'status' => 'Shipped',
            'comments' => 'Customer requested that ad materials (such as posters, pamphlets) be included in the shippment',
                'customerNumber' => 240,
            ),
            217 => 
            array (
                'orderNumber' => 10317,
                'orderDate' => '2004-11-02',
                'requiredDate' => '2004-11-12',
                'shippedDate' => '2004-11-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 161,
            ),
            218 => 
            array (
                'orderNumber' => 10318,
                'orderDate' => '2004-11-02',
                'requiredDate' => '2004-11-09',
                'shippedDate' => '2004-11-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 157,
            ),
            219 => 
            array (
                'orderNumber' => 10319,
                'orderDate' => '2004-11-03',
                'requiredDate' => '2004-11-11',
                'shippedDate' => '2004-11-06',
                'status' => 'Shipped',
                'comments' => 'Customer requested that DHL is used for this shipping',
                'customerNumber' => 456,
            ),
            220 => 
            array (
                'orderNumber' => 10320,
                'orderDate' => '2004-11-03',
                'requiredDate' => '2004-11-13',
                'shippedDate' => '2004-11-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 144,
            ),
            221 => 
            array (
                'orderNumber' => 10321,
                'orderDate' => '2004-11-04',
                'requiredDate' => '2004-11-12',
                'shippedDate' => '2004-11-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 462,
            ),
            222 => 
            array (
                'orderNumber' => 10322,
                'orderDate' => '2004-11-04',
                'requiredDate' => '2004-11-12',
                'shippedDate' => '2004-11-10',
                'status' => 'Shipped',
                'comments' => 'Customer has worked with some of our vendors in the past and is aware of their MSRP',
                'customerNumber' => 363,
            ),
            223 => 
            array (
                'orderNumber' => 10323,
                'orderDate' => '2004-11-05',
                'requiredDate' => '2004-11-12',
                'shippedDate' => '2004-11-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 128,
            ),
            224 => 
            array (
                'orderNumber' => 10324,
                'orderDate' => '2004-11-05',
                'requiredDate' => '2004-11-11',
                'shippedDate' => '2004-11-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 181,
            ),
            225 => 
            array (
                'orderNumber' => 10325,
                'orderDate' => '2004-11-05',
                'requiredDate' => '2004-11-13',
                'shippedDate' => '2004-11-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 121,
            ),
            226 => 
            array (
                'orderNumber' => 10326,
                'orderDate' => '2004-11-09',
                'requiredDate' => '2004-11-16',
                'shippedDate' => '2004-11-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 144,
            ),
            227 => 
            array (
                'orderNumber' => 10327,
                'orderDate' => '2004-11-10',
                'requiredDate' => '2004-11-19',
                'shippedDate' => '2004-11-13',
                'status' => 'Resolved',
                'comments' => 'Order was disputed and resolved on 12/1/04. The Sales Manager was involved. Customer claims the scales of the models don\'t match what was discussed.',
                'customerNumber' => 145,
            ),
            228 => 
            array (
                'orderNumber' => 10328,
                'orderDate' => '2004-11-12',
                'requiredDate' => '2004-11-21',
                'shippedDate' => '2004-11-18',
                'status' => 'Shipped',
                'comments' => 'Customer very concerned about the exact color of the models. There is high risk that he may dispute the order because there is a slight color mismatch',
                'customerNumber' => 278,
            ),
            229 => 
            array (
                'orderNumber' => 10329,
                'orderDate' => '2004-11-15',
                'requiredDate' => '2004-11-24',
                'shippedDate' => '2004-11-16',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 131,
            ),
            230 => 
            array (
                'orderNumber' => 10330,
                'orderDate' => '2004-11-16',
                'requiredDate' => '2004-11-25',
                'shippedDate' => '2004-11-21',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 385,
            ),
            231 => 
            array (
                'orderNumber' => 10331,
                'orderDate' => '2004-11-17',
                'requiredDate' => '2004-11-23',
                'shippedDate' => '2004-11-23',
                'status' => 'Shipped',
                'comments' => 'Customer requested special shippment. The instructions were passed along to the warehouse',
                'customerNumber' => 486,
            ),
            232 => 
            array (
                'orderNumber' => 10332,
                'orderDate' => '2004-11-17',
                'requiredDate' => '2004-11-25',
                'shippedDate' => '2004-11-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 187,
            ),
            233 => 
            array (
                'orderNumber' => 10333,
                'orderDate' => '2004-11-18',
                'requiredDate' => '2004-11-27',
                'shippedDate' => '2004-11-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 129,
            ),
            234 => 
            array (
                'orderNumber' => 10334,
                'orderDate' => '2004-11-19',
                'requiredDate' => '2004-11-28',
                'shippedDate' => NULL,
                'status' => 'On Hold',
                'comments' => 'The outstaniding balance for this customer exceeds their credit limit. Order will be shipped when a payment is received.',
                'customerNumber' => 144,
            ),
            235 => 
            array (
                'orderNumber' => 10335,
                'orderDate' => '2004-11-19',
                'requiredDate' => '2004-11-29',
                'shippedDate' => '2004-11-23',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            236 => 
            array (
                'orderNumber' => 10336,
                'orderDate' => '2004-11-20',
                'requiredDate' => '2004-11-26',
                'shippedDate' => '2004-11-24',
                'status' => 'Shipped',
                'comments' => 'Customer requested that DHL is used for this shipping',
                'customerNumber' => 172,
            ),
            237 => 
            array (
                'orderNumber' => 10337,
                'orderDate' => '2004-11-21',
                'requiredDate' => '2004-11-30',
                'shippedDate' => '2004-11-26',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 424,
            ),
            238 => 
            array (
                'orderNumber' => 10338,
                'orderDate' => '2004-11-22',
                'requiredDate' => '2004-12-02',
                'shippedDate' => '2004-11-27',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 381,
            ),
            239 => 
            array (
                'orderNumber' => 10339,
                'orderDate' => '2004-11-23',
                'requiredDate' => '2004-11-30',
                'shippedDate' => '2004-11-30',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 398,
            ),
            240 => 
            array (
                'orderNumber' => 10340,
                'orderDate' => '2004-11-24',
                'requiredDate' => '2004-12-01',
                'shippedDate' => '2004-11-25',
                'status' => 'Shipped',
                'comments' => 'Customer is interested in buying more Ferrari models',
                'customerNumber' => 216,
            ),
            241 => 
            array (
                'orderNumber' => 10341,
                'orderDate' => '2004-11-24',
                'requiredDate' => '2004-12-01',
                'shippedDate' => '2004-11-29',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 382,
            ),
            242 => 
            array (
                'orderNumber' => 10342,
                'orderDate' => '2004-11-24',
                'requiredDate' => '2004-12-01',
                'shippedDate' => '2004-11-29',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 114,
            ),
            243 => 
            array (
                'orderNumber' => 10343,
                'orderDate' => '2004-11-24',
                'requiredDate' => '2004-12-01',
                'shippedDate' => '2004-11-26',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 353,
            ),
            244 => 
            array (
                'orderNumber' => 10344,
                'orderDate' => '2004-11-25',
                'requiredDate' => '2004-12-02',
                'shippedDate' => '2004-11-29',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 350,
            ),
            245 => 
            array (
                'orderNumber' => 10345,
                'orderDate' => '2004-11-25',
                'requiredDate' => '2004-12-01',
                'shippedDate' => '2004-11-26',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 103,
            ),
            246 => 
            array (
                'orderNumber' => 10346,
                'orderDate' => '2004-11-29',
                'requiredDate' => '2004-12-05',
                'shippedDate' => '2004-11-30',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 112,
            ),
            247 => 
            array (
                'orderNumber' => 10347,
                'orderDate' => '2004-11-29',
                'requiredDate' => '2004-12-07',
                'shippedDate' => '2004-11-30',
                'status' => 'Shipped',
                'comments' => 'Can we deliver the new Ford Mustang models by end-of-quarter?',
                'customerNumber' => 114,
            ),
            248 => 
            array (
                'orderNumber' => 10348,
                'orderDate' => '2004-11-01',
                'requiredDate' => '2004-11-08',
                'shippedDate' => '2004-11-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 458,
            ),
            249 => 
            array (
                'orderNumber' => 10349,
                'orderDate' => '2004-12-01',
                'requiredDate' => '2004-12-07',
                'shippedDate' => '2004-12-03',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 151,
            ),
            250 => 
            array (
                'orderNumber' => 10350,
                'orderDate' => '2004-12-02',
                'requiredDate' => '2004-12-08',
                'shippedDate' => '2004-12-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            251 => 
            array (
                'orderNumber' => 10351,
                'orderDate' => '2004-12-03',
                'requiredDate' => '2004-12-11',
                'shippedDate' => '2004-12-07',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 324,
            ),
            252 => 
            array (
                'orderNumber' => 10352,
                'orderDate' => '2004-12-03',
                'requiredDate' => '2004-12-12',
                'shippedDate' => '2004-12-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 198,
            ),
            253 => 
            array (
                'orderNumber' => 10353,
                'orderDate' => '2004-12-04',
                'requiredDate' => '2004-12-11',
                'shippedDate' => '2004-12-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 447,
            ),
            254 => 
            array (
                'orderNumber' => 10354,
                'orderDate' => '2004-12-04',
                'requiredDate' => '2004-12-10',
                'shippedDate' => '2004-12-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 323,
            ),
            255 => 
            array (
                'orderNumber' => 10355,
                'orderDate' => '2004-12-07',
                'requiredDate' => '2004-12-14',
                'shippedDate' => '2004-12-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            256 => 
            array (
                'orderNumber' => 10356,
                'orderDate' => '2004-12-09',
                'requiredDate' => '2004-12-15',
                'shippedDate' => '2004-12-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 250,
            ),
            257 => 
            array (
                'orderNumber' => 10357,
                'orderDate' => '2004-12-10',
                'requiredDate' => '2004-12-16',
                'shippedDate' => '2004-12-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            258 => 
            array (
                'orderNumber' => 10358,
                'orderDate' => '2004-12-10',
                'requiredDate' => '2004-12-16',
                'shippedDate' => '2004-12-16',
                'status' => 'Shipped',
                'comments' => 'Customer requested that DHL is used for this shipping',
                'customerNumber' => 141,
            ),
            259 => 
            array (
                'orderNumber' => 10359,
                'orderDate' => '2004-12-15',
                'requiredDate' => '2004-12-23',
                'shippedDate' => '2004-12-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 353,
            ),
            260 => 
            array (
                'orderNumber' => 10360,
                'orderDate' => '2004-12-16',
                'requiredDate' => '2004-12-22',
                'shippedDate' => '2004-12-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 496,
            ),
            261 => 
            array (
                'orderNumber' => 10361,
                'orderDate' => '2004-12-17',
                'requiredDate' => '2004-12-24',
                'shippedDate' => '2004-12-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 282,
            ),
            262 => 
            array (
                'orderNumber' => 10362,
                'orderDate' => '2005-01-05',
                'requiredDate' => '2005-01-16',
                'shippedDate' => '2005-01-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 161,
            ),
            263 => 
            array (
                'orderNumber' => 10363,
                'orderDate' => '2005-01-06',
                'requiredDate' => '2005-01-12',
                'shippedDate' => '2005-01-10',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 334,
            ),
            264 => 
            array (
                'orderNumber' => 10364,
                'orderDate' => '2005-01-06',
                'requiredDate' => '2005-01-17',
                'shippedDate' => '2005-01-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 350,
            ),
            265 => 
            array (
                'orderNumber' => 10365,
                'orderDate' => '2005-01-07',
                'requiredDate' => '2005-01-18',
                'shippedDate' => '2005-01-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 320,
            ),
            266 => 
            array (
                'orderNumber' => 10366,
                'orderDate' => '2005-01-10',
                'requiredDate' => '2005-01-19',
                'shippedDate' => '2005-01-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 381,
            ),
            267 => 
            array (
                'orderNumber' => 10367,
                'orderDate' => '2005-01-12',
                'requiredDate' => '2005-01-21',
                'shippedDate' => '2005-01-16',
                'status' => 'Resolved',
                'comments' => 'This order was disputed and resolved on 2/1/2005. Customer claimed that container with shipment was damaged. FedEx\'s investigation proved this wrong.',
                'customerNumber' => 205,
            ),
            268 => 
            array (
                'orderNumber' => 10368,
                'orderDate' => '2005-01-19',
                'requiredDate' => '2005-01-27',
                'shippedDate' => '2005-01-24',
                'status' => 'Shipped',
                'comments' => 'Can we renegotiate this one?',
                'customerNumber' => 124,
            ),
            269 => 
            array (
                'orderNumber' => 10369,
                'orderDate' => '2005-01-20',
                'requiredDate' => '2005-01-28',
                'shippedDate' => '2005-01-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 379,
            ),
            270 => 
            array (
                'orderNumber' => 10370,
                'orderDate' => '2005-01-20',
                'requiredDate' => '2005-02-01',
                'shippedDate' => '2005-01-25',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 276,
            ),
            271 => 
            array (
                'orderNumber' => 10371,
                'orderDate' => '2005-01-23',
                'requiredDate' => '2005-02-03',
                'shippedDate' => '2005-01-25',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            272 => 
            array (
                'orderNumber' => 10372,
                'orderDate' => '2005-01-26',
                'requiredDate' => '2005-02-05',
                'shippedDate' => '2005-01-28',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 398,
            ),
            273 => 
            array (
                'orderNumber' => 10373,
                'orderDate' => '2005-01-31',
                'requiredDate' => '2005-02-08',
                'shippedDate' => '2005-02-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 311,
            ),
            274 => 
            array (
                'orderNumber' => 10374,
                'orderDate' => '2005-02-02',
                'requiredDate' => '2005-02-09',
                'shippedDate' => '2005-02-03',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 333,
            ),
            275 => 
            array (
                'orderNumber' => 10375,
                'orderDate' => '2005-02-03',
                'requiredDate' => '2005-02-10',
                'shippedDate' => '2005-02-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 119,
            ),
            276 => 
            array (
                'orderNumber' => 10376,
                'orderDate' => '2005-02-08',
                'requiredDate' => '2005-02-18',
                'shippedDate' => '2005-02-13',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 219,
            ),
            277 => 
            array (
                'orderNumber' => 10377,
                'orderDate' => '2005-02-09',
                'requiredDate' => '2005-02-21',
                'shippedDate' => '2005-02-12',
                'status' => 'Shipped',
                'comments' => 'Cautious optimism. We have happy customers here, if we can keep them well stocked.  I need all the information I can get on the planned shippments of Porches',
                'customerNumber' => 186,
            ),
            278 => 
            array (
                'orderNumber' => 10378,
                'orderDate' => '2005-02-10',
                'requiredDate' => '2005-02-18',
                'shippedDate' => '2005-02-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            279 => 
            array (
                'orderNumber' => 10379,
                'orderDate' => '2005-02-10',
                'requiredDate' => '2005-02-18',
                'shippedDate' => '2005-02-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            280 => 
            array (
                'orderNumber' => 10380,
                'orderDate' => '2005-02-16',
                'requiredDate' => '2005-02-24',
                'shippedDate' => '2005-02-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            281 => 
            array (
                'orderNumber' => 10381,
                'orderDate' => '2005-02-17',
                'requiredDate' => '2005-02-25',
                'shippedDate' => '2005-02-18',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 321,
            ),
            282 => 
            array (
                'orderNumber' => 10382,
                'orderDate' => '2005-02-17',
                'requiredDate' => '2005-02-23',
                'shippedDate' => '2005-02-18',
                'status' => 'Shipped',
                'comments' => 'Custom shipping instructions sent to warehouse',
                'customerNumber' => 124,
            ),
            283 => 
            array (
                'orderNumber' => 10383,
                'orderDate' => '2005-02-22',
                'requiredDate' => '2005-03-02',
                'shippedDate' => '2005-02-25',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            284 => 
            array (
                'orderNumber' => 10384,
                'orderDate' => '2005-02-23',
                'requiredDate' => '2005-03-06',
                'shippedDate' => '2005-02-27',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 321,
            ),
            285 => 
            array (
                'orderNumber' => 10385,
                'orderDate' => '2005-02-28',
                'requiredDate' => '2005-03-09',
                'shippedDate' => '2005-03-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            286 => 
            array (
                'orderNumber' => 10386,
                'orderDate' => '2005-03-01',
                'requiredDate' => '2005-03-09',
                'shippedDate' => '2005-03-06',
                'status' => 'Resolved',
                'comments' => 'Disputed then Resolved on 3/15/2005. Customer doesn\'t like the craftsmaship of the models.',
                'customerNumber' => 141,
            ),
            287 => 
            array (
                'orderNumber' => 10387,
                'orderDate' => '2005-03-02',
                'requiredDate' => '2005-03-09',
                'shippedDate' => '2005-03-06',
                'status' => 'Shipped',
                'comments' => 'We need to keep in close contact with their Marketing VP. He is the decision maker for all their purchases.',
                'customerNumber' => 148,
            ),
            288 => 
            array (
                'orderNumber' => 10388,
                'orderDate' => '2005-03-03',
                'requiredDate' => '2005-03-11',
                'shippedDate' => '2005-03-09',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 462,
            ),
            289 => 
            array (
                'orderNumber' => 10389,
                'orderDate' => '2005-03-03',
                'requiredDate' => '2005-03-09',
                'shippedDate' => '2005-03-08',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 448,
            ),
            290 => 
            array (
                'orderNumber' => 10390,
                'orderDate' => '2005-03-04',
                'requiredDate' => '2005-03-11',
                'shippedDate' => '2005-03-07',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with Finance.',
                'customerNumber' => 124,
            ),
            291 => 
            array (
                'orderNumber' => 10391,
                'orderDate' => '2005-03-09',
                'requiredDate' => '2005-03-20',
                'shippedDate' => '2005-03-15',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 276,
            ),
            292 => 
            array (
                'orderNumber' => 10392,
                'orderDate' => '2005-03-10',
                'requiredDate' => '2005-03-18',
                'shippedDate' => '2005-03-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 452,
            ),
            293 => 
            array (
                'orderNumber' => 10393,
                'orderDate' => '2005-03-11',
                'requiredDate' => '2005-03-22',
                'shippedDate' => '2005-03-14',
                'status' => 'Shipped',
                'comments' => 'They want to reevaluate their terms agreement with Finance.',
                'customerNumber' => 323,
            ),
            294 => 
            array (
                'orderNumber' => 10394,
                'orderDate' => '2005-03-15',
                'requiredDate' => '2005-03-25',
                'shippedDate' => '2005-03-19',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            295 => 
            array (
                'orderNumber' => 10395,
                'orderDate' => '2005-03-17',
                'requiredDate' => '2005-03-24',
                'shippedDate' => '2005-03-23',
                'status' => 'Shipped',
                'comments' => 'We must be cautions with this customer. Their VP of Sales resigned. Company may be heading down.',
                'customerNumber' => 250,
            ),
            296 => 
            array (
                'orderNumber' => 10396,
                'orderDate' => '2005-03-23',
                'requiredDate' => '2005-04-02',
                'shippedDate' => '2005-03-28',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 124,
            ),
            297 => 
            array (
                'orderNumber' => 10397,
                'orderDate' => '2005-03-28',
                'requiredDate' => '2005-04-09',
                'shippedDate' => '2005-04-01',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 242,
            ),
            298 => 
            array (
                'orderNumber' => 10398,
                'orderDate' => '2005-03-30',
                'requiredDate' => '2005-04-09',
                'shippedDate' => '2005-03-31',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 353,
            ),
            299 => 
            array (
                'orderNumber' => 10399,
                'orderDate' => '2005-04-01',
                'requiredDate' => '2005-04-12',
                'shippedDate' => '2005-04-03',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 496,
            ),
            300 => 
            array (
                'orderNumber' => 10400,
                'orderDate' => '2005-04-01',
                'requiredDate' => '2005-04-11',
                'shippedDate' => '2005-04-04',
                'status' => 'Shipped',
                'comments' => 'Customer requested that DHL is used for this shipping',
                'customerNumber' => 450,
            ),
            301 => 
            array (
                'orderNumber' => 10401,
                'orderDate' => '2005-04-03',
                'requiredDate' => '2005-04-14',
                'shippedDate' => NULL,
                'status' => 'On Hold',
                'comments' => 'Customer credit limit exceeded. Will ship when a payment is received.',
                'customerNumber' => 328,
            ),
            302 => 
            array (
                'orderNumber' => 10402,
                'orderDate' => '2005-04-07',
                'requiredDate' => '2005-04-14',
                'shippedDate' => '2005-04-12',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 406,
            ),
            303 => 
            array (
                'orderNumber' => 10403,
                'orderDate' => '2005-04-08',
                'requiredDate' => '2005-04-18',
                'shippedDate' => '2005-04-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 201,
            ),
            304 => 
            array (
                'orderNumber' => 10404,
                'orderDate' => '2005-04-08',
                'requiredDate' => '2005-04-14',
                'shippedDate' => '2005-04-11',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 323,
            ),
            305 => 
            array (
                'orderNumber' => 10405,
                'orderDate' => '2005-04-14',
                'requiredDate' => '2005-04-24',
                'shippedDate' => '2005-04-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 209,
            ),
            306 => 
            array (
                'orderNumber' => 10406,
                'orderDate' => '2005-04-15',
                'requiredDate' => '2005-04-25',
                'shippedDate' => '2005-04-21',
                'status' => 'Disputed',
                'comments' => 'Customer claims container with shipment was damaged during shipping and some items were missing. I am talking to FedEx about this.',
                'customerNumber' => 145,
            ),
            307 => 
            array (
                'orderNumber' => 10407,
                'orderDate' => '2005-04-22',
                'requiredDate' => '2005-05-04',
                'shippedDate' => NULL,
                'status' => 'On Hold',
                'comments' => 'Customer credit limit exceeded. Will ship when a payment is received.',
                'customerNumber' => 450,
            ),
            308 => 
            array (
                'orderNumber' => 10408,
                'orderDate' => '2005-04-22',
                'requiredDate' => '2005-04-29',
                'shippedDate' => '2005-04-27',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 398,
            ),
            309 => 
            array (
                'orderNumber' => 10409,
                'orderDate' => '2005-04-23',
                'requiredDate' => '2005-05-05',
                'shippedDate' => '2005-04-24',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 166,
            ),
            310 => 
            array (
                'orderNumber' => 10410,
                'orderDate' => '2005-04-29',
                'requiredDate' => '2005-05-10',
                'shippedDate' => '2005-04-30',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 357,
            ),
            311 => 
            array (
                'orderNumber' => 10411,
                'orderDate' => '2005-05-01',
                'requiredDate' => '2005-05-08',
                'shippedDate' => '2005-05-06',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 233,
            ),
            312 => 
            array (
                'orderNumber' => 10412,
                'orderDate' => '2005-05-03',
                'requiredDate' => '2005-05-13',
                'shippedDate' => '2005-05-05',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            313 => 
            array (
                'orderNumber' => 10413,
                'orderDate' => '2005-05-05',
                'requiredDate' => '2005-05-14',
                'shippedDate' => '2005-05-09',
                'status' => 'Shipped',
                'comments' => 'Customer requested that DHL is used for this shipping',
                'customerNumber' => 175,
            ),
            314 => 
            array (
                'orderNumber' => 10414,
                'orderDate' => '2005-05-06',
                'requiredDate' => '2005-05-13',
                'shippedDate' => NULL,
                'status' => 'On Hold',
                'comments' => 'Customer credit limit exceeded. Will ship when a payment is received.',
                'customerNumber' => 362,
            ),
            315 => 
            array (
                'orderNumber' => 10415,
                'orderDate' => '2005-05-09',
                'requiredDate' => '2005-05-20',
                'shippedDate' => '2005-05-12',
                'status' => 'Disputed',
                'comments' => 'Customer claims the scales of the models don\'t match what was discussed. I keep all the paperwork though to prove otherwise',
                'customerNumber' => 471,
            ),
            316 => 
            array (
                'orderNumber' => 10416,
                'orderDate' => '2005-05-10',
                'requiredDate' => '2005-05-16',
                'shippedDate' => '2005-05-14',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 386,
            ),
            317 => 
            array (
                'orderNumber' => 10417,
                'orderDate' => '2005-05-13',
                'requiredDate' => '2005-05-19',
                'shippedDate' => '2005-05-19',
                'status' => 'Disputed',
                'comments' => 'Customer doesn\'t like the colors and precision of the models.',
                'customerNumber' => 141,
            ),
            318 => 
            array (
                'orderNumber' => 10418,
                'orderDate' => '2005-05-16',
                'requiredDate' => '2005-05-24',
                'shippedDate' => '2005-05-20',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 412,
            ),
            319 => 
            array (
                'orderNumber' => 10419,
                'orderDate' => '2005-05-17',
                'requiredDate' => '2005-05-28',
                'shippedDate' => '2005-05-19',
                'status' => 'Shipped',
                'comments' => NULL,
                'customerNumber' => 382,
            ),
            320 => 
            array (
                'orderNumber' => 10420,
                'orderDate' => '2005-05-29',
                'requiredDate' => '2005-06-07',
                'shippedDate' => NULL,
                'status' => 'In Process',
                'comments' => NULL,
                'customerNumber' => 282,
            ),
            321 => 
            array (
                'orderNumber' => 10421,
                'orderDate' => '2005-05-29',
                'requiredDate' => '2005-06-06',
                'shippedDate' => NULL,
                'status' => 'In Process',
                'comments' => 'Custom shipping instructions were sent to warehouse',
                'customerNumber' => 124,
            ),
            322 => 
            array (
                'orderNumber' => 10422,
                'orderDate' => '2005-05-30',
                'requiredDate' => '2005-06-11',
                'shippedDate' => NULL,
                'status' => 'In Process',
                'comments' => NULL,
                'customerNumber' => 157,
            ),
            323 => 
            array (
                'orderNumber' => 10423,
                'orderDate' => '2005-05-30',
                'requiredDate' => '2005-06-05',
                'shippedDate' => NULL,
                'status' => 'In Process',
                'comments' => NULL,
                'customerNumber' => 314,
            ),
            324 => 
            array (
                'orderNumber' => 10424,
                'orderDate' => '2005-05-31',
                'requiredDate' => '2005-06-08',
                'shippedDate' => NULL,
                'status' => 'In Process',
                'comments' => NULL,
                'customerNumber' => 141,
            ),
            325 => 
            array (
                'orderNumber' => 10425,
                'orderDate' => '2005-05-31',
                'requiredDate' => '2005-06-07',
                'shippedDate' => NULL,
                'status' => 'In Process',
                'comments' => NULL,
                'customerNumber' => 119,
            ),
        ));
        
        
    }
}
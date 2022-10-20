<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'customerNumber' => 103,
                'checkNumber' => 'HQ336336',
                'paymentDate' => '2004-10-19',
                'amount' => '6066.78',
            ),
            1 => 
            array (
                'customerNumber' => 103,
                'checkNumber' => 'JM555205',
                'paymentDate' => '2003-06-05',
                'amount' => '14571.44',
            ),
            2 => 
            array (
                'customerNumber' => 103,
                'checkNumber' => 'OM314933',
                'paymentDate' => '2004-12-18',
                'amount' => '1676.14',
            ),
            3 => 
            array (
                'customerNumber' => 112,
                'checkNumber' => 'BO864823',
                'paymentDate' => '2004-12-17',
                'amount' => '14191.12',
            ),
            4 => 
            array (
                'customerNumber' => 112,
                'checkNumber' => 'HQ55022',
                'paymentDate' => '2003-06-06',
                'amount' => '32641.98',
            ),
            5 => 
            array (
                'customerNumber' => 112,
                'checkNumber' => 'ND748579',
                'paymentDate' => '2004-08-20',
                'amount' => '33347.88',
            ),
            6 => 
            array (
                'customerNumber' => 114,
                'checkNumber' => 'GG31455',
                'paymentDate' => '2003-05-20',
                'amount' => '45864.03',
            ),
            7 => 
            array (
                'customerNumber' => 114,
                'checkNumber' => 'MA765515',
                'paymentDate' => '2004-12-15',
                'amount' => '82261.22',
            ),
            8 => 
            array (
                'customerNumber' => 114,
                'checkNumber' => 'NP603840',
                'paymentDate' => '2003-05-31',
                'amount' => '7565.08',
            ),
            9 => 
            array (
                'customerNumber' => 114,
                'checkNumber' => 'NR27552',
                'paymentDate' => '2004-03-10',
                'amount' => '44894.74',
            ),
            10 => 
            array (
                'customerNumber' => 119,
                'checkNumber' => 'DB933704',
                'paymentDate' => '2004-11-14',
                'amount' => '19501.82',
            ),
            11 => 
            array (
                'customerNumber' => 119,
                'checkNumber' => 'LN373447',
                'paymentDate' => '2004-08-08',
                'amount' => '47924.19',
            ),
            12 => 
            array (
                'customerNumber' => 119,
                'checkNumber' => 'NG94694',
                'paymentDate' => '2005-02-22',
                'amount' => '49523.67',
            ),
            13 => 
            array (
                'customerNumber' => 121,
                'checkNumber' => 'DB889831',
                'paymentDate' => '2003-02-16',
                'amount' => '50218.95',
            ),
            14 => 
            array (
                'customerNumber' => 121,
                'checkNumber' => 'FD317790',
                'paymentDate' => '2003-10-28',
                'amount' => '1491.38',
            ),
            15 => 
            array (
                'customerNumber' => 121,
                'checkNumber' => 'KI831359',
                'paymentDate' => '2004-11-04',
                'amount' => '17876.32',
            ),
            16 => 
            array (
                'customerNumber' => 121,
                'checkNumber' => 'MA302151',
                'paymentDate' => '2004-11-28',
                'amount' => '34638.14',
            ),
            17 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'AE215433',
                'paymentDate' => '2005-03-05',
                'amount' => '101244.59',
            ),
            18 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'BG255406',
                'paymentDate' => '2004-08-28',
                'amount' => '85410.87',
            ),
            19 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'CQ287967',
                'paymentDate' => '2003-04-11',
                'amount' => '11044.30',
            ),
            20 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'ET64396',
                'paymentDate' => '2005-04-16',
                'amount' => '83598.04',
            ),
            21 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'HI366474',
                'paymentDate' => '2004-12-27',
                'amount' => '47142.70',
            ),
            22 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'HR86578',
                'paymentDate' => '2004-11-02',
                'amount' => '55639.66',
            ),
            23 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'KI131716',
                'paymentDate' => '2003-08-15',
                'amount' => '111654.40',
            ),
            24 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'LF217299',
                'paymentDate' => '2004-03-26',
                'amount' => '43369.30',
            ),
            25 => 
            array (
                'customerNumber' => 124,
                'checkNumber' => 'NT141748',
                'paymentDate' => '2003-11-25',
                'amount' => '45084.38',
            ),
            26 => 
            array (
                'customerNumber' => 128,
                'checkNumber' => 'DI925118',
                'paymentDate' => '2003-01-28',
                'amount' => '10549.01',
            ),
            27 => 
            array (
                'customerNumber' => 128,
                'checkNumber' => 'FA465482',
                'paymentDate' => '2003-10-18',
                'amount' => '24101.81',
            ),
            28 => 
            array (
                'customerNumber' => 128,
                'checkNumber' => 'FH668230',
                'paymentDate' => '2004-03-24',
                'amount' => '33820.62',
            ),
            29 => 
            array (
                'customerNumber' => 128,
                'checkNumber' => 'IP383901',
                'paymentDate' => '2004-11-18',
                'amount' => '7466.32',
            ),
            30 => 
            array (
                'customerNumber' => 129,
                'checkNumber' => 'DM826140',
                'paymentDate' => '2004-12-08',
                'amount' => '26248.78',
            ),
            31 => 
            array (
                'customerNumber' => 129,
                'checkNumber' => 'ID449593',
                'paymentDate' => '2003-12-11',
                'amount' => '23923.93',
            ),
            32 => 
            array (
                'customerNumber' => 129,
                'checkNumber' => 'PI42991',
                'paymentDate' => '2003-04-09',
                'amount' => '16537.85',
            ),
            33 => 
            array (
                'customerNumber' => 131,
                'checkNumber' => 'CL442705',
                'paymentDate' => '2003-03-12',
                'amount' => '22292.62',
            ),
            34 => 
            array (
                'customerNumber' => 131,
                'checkNumber' => 'MA724562',
                'paymentDate' => '2004-12-02',
                'amount' => '50025.35',
            ),
            35 => 
            array (
                'customerNumber' => 131,
                'checkNumber' => 'NB445135',
                'paymentDate' => '2004-09-11',
                'amount' => '35321.97',
            ),
            36 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'AU364101',
                'paymentDate' => '2003-07-19',
                'amount' => '36251.03',
            ),
            37 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'DB583216',
                'paymentDate' => '2004-11-01',
                'amount' => '36140.38',
            ),
            38 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'DL460618',
                'paymentDate' => '2005-05-19',
                'amount' => '46895.48',
            ),
            39 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'HJ32686',
                'paymentDate' => '2004-01-30',
                'amount' => '59830.55',
            ),
            40 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'ID10962',
                'paymentDate' => '2004-12-31',
                'amount' => '116208.40',
            ),
            41 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'IN446258',
                'paymentDate' => '2005-03-25',
                'amount' => '65071.26',
            ),
            42 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'JE105477',
                'paymentDate' => '2005-03-18',
                'amount' => '120166.58',
            ),
            43 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'JN355280',
                'paymentDate' => '2003-10-26',
                'amount' => '49539.37',
            ),
            44 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'JN722010',
                'paymentDate' => '2003-02-25',
                'amount' => '40206.20',
            ),
            45 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'KT52578',
                'paymentDate' => '2003-12-09',
                'amount' => '63843.55',
            ),
            46 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'MC46946',
                'paymentDate' => '2004-07-09',
                'amount' => '35420.74',
            ),
            47 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'MF629602',
                'paymentDate' => '2004-08-16',
                'amount' => '20009.53',
            ),
            48 => 
            array (
                'customerNumber' => 141,
                'checkNumber' => 'NU627706',
                'paymentDate' => '2004-05-17',
                'amount' => '26155.91',
            ),
            49 => 
            array (
                'customerNumber' => 144,
                'checkNumber' => 'IR846303',
                'paymentDate' => '2004-12-12',
                'amount' => '36005.71',
            ),
            50 => 
            array (
                'customerNumber' => 144,
                'checkNumber' => 'LA685678',
                'paymentDate' => '2003-04-09',
                'amount' => '7674.94',
            ),
            51 => 
            array (
                'customerNumber' => 145,
                'checkNumber' => 'CN328545',
                'paymentDate' => '2004-07-03',
                'amount' => '4710.73',
            ),
            52 => 
            array (
                'customerNumber' => 145,
                'checkNumber' => 'ED39322',
                'paymentDate' => '2004-04-26',
                'amount' => '28211.70',
            ),
            53 => 
            array (
                'customerNumber' => 145,
                'checkNumber' => 'HR182688',
                'paymentDate' => '2004-12-01',
                'amount' => '20564.86',
            ),
            54 => 
            array (
                'customerNumber' => 145,
                'checkNumber' => 'JJ246391',
                'paymentDate' => '2003-02-20',
                'amount' => '53959.21',
            ),
            55 => 
            array (
                'customerNumber' => 146,
                'checkNumber' => 'FP549817',
                'paymentDate' => '2004-03-18',
                'amount' => '40978.53',
            ),
            56 => 
            array (
                'customerNumber' => 146,
                'checkNumber' => 'FU793410',
                'paymentDate' => '2004-01-16',
                'amount' => '49614.72',
            ),
            57 => 
            array (
                'customerNumber' => 146,
                'checkNumber' => 'LJ160635',
                'paymentDate' => '2003-12-10',
                'amount' => '39712.10',
            ),
            58 => 
            array (
                'customerNumber' => 148,
                'checkNumber' => 'BI507030',
                'paymentDate' => '2003-04-22',
                'amount' => '44380.15',
            ),
            59 => 
            array (
                'customerNumber' => 148,
                'checkNumber' => 'DD635282',
                'paymentDate' => '2004-08-11',
                'amount' => '2611.84',
            ),
            60 => 
            array (
                'customerNumber' => 148,
                'checkNumber' => 'KM172879',
                'paymentDate' => '2003-12-26',
                'amount' => '105743.00',
            ),
            61 => 
            array (
                'customerNumber' => 148,
                'checkNumber' => 'ME497970',
                'paymentDate' => '2005-03-27',
                'amount' => '3516.04',
            ),
            62 => 
            array (
                'customerNumber' => 151,
                'checkNumber' => 'BF686658',
                'paymentDate' => '2003-12-22',
                'amount' => '58793.53',
            ),
            63 => 
            array (
                'customerNumber' => 151,
                'checkNumber' => 'GB852215',
                'paymentDate' => '2004-07-26',
                'amount' => '20314.44',
            ),
            64 => 
            array (
                'customerNumber' => 151,
                'checkNumber' => 'IP568906',
                'paymentDate' => '2003-06-18',
                'amount' => '58841.35',
            ),
            65 => 
            array (
                'customerNumber' => 151,
                'checkNumber' => 'KI884577',
                'paymentDate' => '2004-12-14',
                'amount' => '39964.63',
            ),
            66 => 
            array (
                'customerNumber' => 157,
                'checkNumber' => 'HI618861',
                'paymentDate' => '2004-11-19',
                'amount' => '35152.12',
            ),
            67 => 
            array (
                'customerNumber' => 157,
                'checkNumber' => 'NN711988',
                'paymentDate' => '2004-09-07',
                'amount' => '63357.13',
            ),
            68 => 
            array (
                'customerNumber' => 161,
                'checkNumber' => 'BR352384',
                'paymentDate' => '2004-11-14',
                'amount' => '2434.25',
            ),
            69 => 
            array (
                'customerNumber' => 161,
                'checkNumber' => 'BR478494',
                'paymentDate' => '2003-11-18',
                'amount' => '50743.65',
            ),
            70 => 
            array (
                'customerNumber' => 161,
                'checkNumber' => 'KG644125',
                'paymentDate' => '2005-02-02',
                'amount' => '12692.19',
            ),
            71 => 
            array (
                'customerNumber' => 161,
                'checkNumber' => 'NI908214',
                'paymentDate' => '2003-08-05',
                'amount' => '38675.13',
            ),
            72 => 
            array (
                'customerNumber' => 166,
                'checkNumber' => 'BQ327613',
                'paymentDate' => '2004-09-16',
                'amount' => '38785.48',
            ),
            73 => 
            array (
                'customerNumber' => 166,
                'checkNumber' => 'DC979307',
                'paymentDate' => '2004-07-07',
                'amount' => '44160.92',
            ),
            74 => 
            array (
                'customerNumber' => 166,
                'checkNumber' => 'LA318629',
                'paymentDate' => '2004-02-28',
                'amount' => '22474.17',
            ),
            75 => 
            array (
                'customerNumber' => 167,
                'checkNumber' => 'ED743615',
                'paymentDate' => '2004-09-19',
                'amount' => '12538.01',
            ),
            76 => 
            array (
                'customerNumber' => 167,
                'checkNumber' => 'GN228846',
                'paymentDate' => '2003-12-03',
                'amount' => '85024.46',
            ),
            77 => 
            array (
                'customerNumber' => 171,
                'checkNumber' => 'GB878038',
                'paymentDate' => '2004-03-15',
                'amount' => '18997.89',
            ),
            78 => 
            array (
                'customerNumber' => 171,
                'checkNumber' => 'IL104425',
                'paymentDate' => '2003-11-22',
                'amount' => '42783.81',
            ),
            79 => 
            array (
                'customerNumber' => 172,
                'checkNumber' => 'AD832091',
                'paymentDate' => '2004-09-09',
                'amount' => '1960.80',
            ),
            80 => 
            array (
                'customerNumber' => 172,
                'checkNumber' => 'CE51751',
                'paymentDate' => '2004-12-04',
                'amount' => '51209.58',
            ),
            81 => 
            array (
                'customerNumber' => 172,
                'checkNumber' => 'EH208589',
                'paymentDate' => '2003-04-20',
                'amount' => '33383.14',
            ),
            82 => 
            array (
                'customerNumber' => 173,
                'checkNumber' => 'GP545698',
                'paymentDate' => '2004-05-13',
                'amount' => '11843.45',
            ),
            83 => 
            array (
                'customerNumber' => 173,
                'checkNumber' => 'IG462397',
                'paymentDate' => '2004-03-29',
                'amount' => '20355.24',
            ),
            84 => 
            array (
                'customerNumber' => 175,
                'checkNumber' => 'CITI3434344',
                'paymentDate' => '2005-05-19',
                'amount' => '28500.78',
            ),
            85 => 
            array (
                'customerNumber' => 175,
                'checkNumber' => 'IO448913',
                'paymentDate' => '2003-11-19',
                'amount' => '24879.08',
            ),
            86 => 
            array (
                'customerNumber' => 175,
                'checkNumber' => 'PI15215',
                'paymentDate' => '2004-07-10',
                'amount' => '42044.77',
            ),
            87 => 
            array (
                'customerNumber' => 177,
                'checkNumber' => 'AU750837',
                'paymentDate' => '2004-04-17',
                'amount' => '15183.63',
            ),
            88 => 
            array (
                'customerNumber' => 177,
                'checkNumber' => 'CI381435',
                'paymentDate' => '2004-01-19',
                'amount' => '47177.59',
            ),
            89 => 
            array (
                'customerNumber' => 181,
                'checkNumber' => 'CM564612',
                'paymentDate' => '2004-04-25',
                'amount' => '22602.36',
            ),
            90 => 
            array (
                'customerNumber' => 181,
                'checkNumber' => 'GQ132144',
                'paymentDate' => '2003-01-30',
                'amount' => '5494.78',
            ),
            91 => 
            array (
                'customerNumber' => 181,
                'checkNumber' => 'OH367219',
                'paymentDate' => '2004-11-16',
                'amount' => '44400.50',
            ),
            92 => 
            array (
                'customerNumber' => 186,
                'checkNumber' => 'AE192287',
                'paymentDate' => '2005-03-10',
                'amount' => '23602.90',
            ),
            93 => 
            array (
                'customerNumber' => 186,
                'checkNumber' => 'AK412714',
                'paymentDate' => '2003-10-27',
                'amount' => '37602.48',
            ),
            94 => 
            array (
                'customerNumber' => 186,
                'checkNumber' => 'KA602407',
                'paymentDate' => '2004-10-21',
                'amount' => '34341.08',
            ),
            95 => 
            array (
                'customerNumber' => 187,
                'checkNumber' => 'AM968797',
                'paymentDate' => '2004-11-03',
                'amount' => '52825.29',
            ),
            96 => 
            array (
                'customerNumber' => 187,
                'checkNumber' => 'BQ39062',
                'paymentDate' => '2004-12-08',
                'amount' => '47159.11',
            ),
            97 => 
            array (
                'customerNumber' => 187,
                'checkNumber' => 'KL124726',
                'paymentDate' => '2003-03-27',
                'amount' => '48425.69',
            ),
            98 => 
            array (
                'customerNumber' => 189,
                'checkNumber' => 'BO711618',
                'paymentDate' => '2004-10-03',
                'amount' => '17359.53',
            ),
            99 => 
            array (
                'customerNumber' => 189,
                'checkNumber' => 'NM916675',
                'paymentDate' => '2004-03-01',
                'amount' => '32538.74',
            ),
            100 => 
            array (
                'customerNumber' => 198,
                'checkNumber' => 'FI192930',
                'paymentDate' => '2004-12-06',
                'amount' => '9658.74',
            ),
            101 => 
            array (
                'customerNumber' => 198,
                'checkNumber' => 'HQ920205',
                'paymentDate' => '2003-07-06',
                'amount' => '6036.96',
            ),
            102 => 
            array (
                'customerNumber' => 198,
                'checkNumber' => 'IS946883',
                'paymentDate' => '2004-09-21',
                'amount' => '5858.56',
            ),
            103 => 
            array (
                'customerNumber' => 201,
                'checkNumber' => 'DP677013',
                'paymentDate' => '2003-10-20',
                'amount' => '23908.24',
            ),
            104 => 
            array (
                'customerNumber' => 201,
                'checkNumber' => 'OO846801',
                'paymentDate' => '2004-06-15',
                'amount' => '37258.94',
            ),
            105 => 
            array (
                'customerNumber' => 202,
                'checkNumber' => 'HI358554',
                'paymentDate' => '2003-12-18',
                'amount' => '36527.61',
            ),
            106 => 
            array (
                'customerNumber' => 202,
                'checkNumber' => 'IQ627690',
                'paymentDate' => '2004-11-08',
                'amount' => '33594.58',
            ),
            107 => 
            array (
                'customerNumber' => 204,
                'checkNumber' => 'GC697638',
                'paymentDate' => '2004-08-13',
                'amount' => '51152.86',
            ),
            108 => 
            array (
                'customerNumber' => 204,
                'checkNumber' => 'IS150005',
                'paymentDate' => '2004-09-24',
                'amount' => '4424.40',
            ),
            109 => 
            array (
                'customerNumber' => 205,
                'checkNumber' => 'GL756480',
                'paymentDate' => '2003-12-04',
                'amount' => '3879.96',
            ),
            110 => 
            array (
                'customerNumber' => 205,
                'checkNumber' => 'LL562733',
                'paymentDate' => '2003-09-05',
                'amount' => '50342.74',
            ),
            111 => 
            array (
                'customerNumber' => 205,
                'checkNumber' => 'NM739638',
                'paymentDate' => '2005-02-06',
                'amount' => '39580.60',
            ),
            112 => 
            array (
                'customerNumber' => 209,
                'checkNumber' => 'BOAF82044',
                'paymentDate' => '2005-05-03',
                'amount' => '35157.75',
            ),
            113 => 
            array (
                'customerNumber' => 209,
                'checkNumber' => 'ED520529',
                'paymentDate' => '2004-06-21',
                'amount' => '4632.31',
            ),
            114 => 
            array (
                'customerNumber' => 209,
                'checkNumber' => 'PH785937',
                'paymentDate' => '2004-05-04',
                'amount' => '36069.26',
            ),
            115 => 
            array (
                'customerNumber' => 211,
                'checkNumber' => 'BJ535230',
                'paymentDate' => '2003-12-09',
                'amount' => '45480.79',
            ),
            116 => 
            array (
                'customerNumber' => 216,
                'checkNumber' => 'BG407567',
                'paymentDate' => '2003-05-09',
                'amount' => '3101.40',
            ),
            117 => 
            array (
                'customerNumber' => 216,
                'checkNumber' => 'ML780814',
                'paymentDate' => '2004-12-06',
                'amount' => '24945.21',
            ),
            118 => 
            array (
                'customerNumber' => 216,
                'checkNumber' => 'MM342086',
                'paymentDate' => '2003-12-14',
                'amount' => '40473.86',
            ),
            119 => 
            array (
                'customerNumber' => 219,
                'checkNumber' => 'BN17870',
                'paymentDate' => '2005-03-02',
                'amount' => '3452.75',
            ),
            120 => 
            array (
                'customerNumber' => 219,
                'checkNumber' => 'BR941480',
                'paymentDate' => '2003-10-18',
                'amount' => '4465.85',
            ),
            121 => 
            array (
                'customerNumber' => 227,
                'checkNumber' => 'MQ413968',
                'paymentDate' => '2003-10-31',
                'amount' => '36164.46',
            ),
            122 => 
            array (
                'customerNumber' => 227,
                'checkNumber' => 'NU21326',
                'paymentDate' => '2004-11-02',
                'amount' => '53745.34',
            ),
            123 => 
            array (
                'customerNumber' => 233,
                'checkNumber' => 'BOFA23232',
                'paymentDate' => '2005-05-20',
                'amount' => '29070.38',
            ),
            124 => 
            array (
                'customerNumber' => 233,
                'checkNumber' => 'II180006',
                'paymentDate' => '2004-07-01',
                'amount' => '22997.45',
            ),
            125 => 
            array (
                'customerNumber' => 233,
                'checkNumber' => 'JG981190',
                'paymentDate' => '2003-11-18',
                'amount' => '16909.84',
            ),
            126 => 
            array (
                'customerNumber' => 239,
                'checkNumber' => 'NQ865547',
                'paymentDate' => '2004-03-15',
                'amount' => '80375.24',
            ),
            127 => 
            array (
                'customerNumber' => 240,
                'checkNumber' => 'IF245157',
                'paymentDate' => '2004-11-16',
                'amount' => '46788.14',
            ),
            128 => 
            array (
                'customerNumber' => 240,
                'checkNumber' => 'JO719695',
                'paymentDate' => '2004-03-28',
                'amount' => '24995.61',
            ),
            129 => 
            array (
                'customerNumber' => 242,
                'checkNumber' => 'AF40894',
                'paymentDate' => '2003-11-22',
                'amount' => '33818.34',
            ),
            130 => 
            array (
                'customerNumber' => 242,
                'checkNumber' => 'HR224331',
                'paymentDate' => '2005-06-03',
                'amount' => '12432.32',
            ),
            131 => 
            array (
                'customerNumber' => 242,
                'checkNumber' => 'KI744716',
                'paymentDate' => '2003-07-21',
                'amount' => '14232.70',
            ),
            132 => 
            array (
                'customerNumber' => 249,
                'checkNumber' => 'IJ399820',
                'paymentDate' => '2004-09-19',
                'amount' => '33924.24',
            ),
            133 => 
            array (
                'customerNumber' => 249,
                'checkNumber' => 'NE404084',
                'paymentDate' => '2004-09-04',
                'amount' => '48298.99',
            ),
            134 => 
            array (
                'customerNumber' => 250,
                'checkNumber' => 'EQ12267',
                'paymentDate' => '2005-05-17',
                'amount' => '17928.09',
            ),
            135 => 
            array (
                'customerNumber' => 250,
                'checkNumber' => 'HD284647',
                'paymentDate' => '2004-12-30',
                'amount' => '26311.63',
            ),
            136 => 
            array (
                'customerNumber' => 250,
                'checkNumber' => 'HN114306',
                'paymentDate' => '2003-07-18',
                'amount' => '23419.47',
            ),
            137 => 
            array (
                'customerNumber' => 256,
                'checkNumber' => 'EP227123',
                'paymentDate' => '2004-02-10',
                'amount' => '5759.42',
            ),
            138 => 
            array (
                'customerNumber' => 256,
                'checkNumber' => 'HE84936',
                'paymentDate' => '2004-10-22',
                'amount' => '53116.99',
            ),
            139 => 
            array (
                'customerNumber' => 259,
                'checkNumber' => 'EU280955',
                'paymentDate' => '2004-11-06',
                'amount' => '61234.67',
            ),
            140 => 
            array (
                'customerNumber' => 259,
                'checkNumber' => 'GB361972',
                'paymentDate' => '2003-12-07',
                'amount' => '27988.47',
            ),
            141 => 
            array (
                'customerNumber' => 260,
                'checkNumber' => 'IO164641',
                'paymentDate' => '2004-08-30',
                'amount' => '37527.58',
            ),
            142 => 
            array (
                'customerNumber' => 260,
                'checkNumber' => 'NH776924',
                'paymentDate' => '2004-04-24',
                'amount' => '29284.42',
            ),
            143 => 
            array (
                'customerNumber' => 276,
                'checkNumber' => 'EM979878',
                'paymentDate' => '2005-02-09',
                'amount' => '27083.78',
            ),
            144 => 
            array (
                'customerNumber' => 276,
                'checkNumber' => 'KM841847',
                'paymentDate' => '2003-11-13',
                'amount' => '38547.19',
            ),
            145 => 
            array (
                'customerNumber' => 276,
                'checkNumber' => 'LE432182',
                'paymentDate' => '2003-09-28',
                'amount' => '41554.73',
            ),
            146 => 
            array (
                'customerNumber' => 276,
                'checkNumber' => 'OJ819725',
                'paymentDate' => '2005-04-30',
                'amount' => '29848.52',
            ),
            147 => 
            array (
                'customerNumber' => 278,
                'checkNumber' => 'BJ483870',
                'paymentDate' => '2004-12-05',
                'amount' => '37654.09',
            ),
            148 => 
            array (
                'customerNumber' => 278,
                'checkNumber' => 'GP636783',
                'paymentDate' => '2003-03-02',
                'amount' => '52151.81',
            ),
            149 => 
            array (
                'customerNumber' => 278,
                'checkNumber' => 'NI983021',
                'paymentDate' => '2003-11-24',
                'amount' => '37723.79',
            ),
            150 => 
            array (
                'customerNumber' => 282,
                'checkNumber' => 'IA793562',
                'paymentDate' => '2003-08-03',
                'amount' => '24013.52',
            ),
            151 => 
            array (
                'customerNumber' => 282,
                'checkNumber' => 'JT819493',
                'paymentDate' => '2004-08-02',
                'amount' => '35806.73',
            ),
            152 => 
            array (
                'customerNumber' => 282,
                'checkNumber' => 'OD327378',
                'paymentDate' => '2005-01-03',
                'amount' => '31835.36',
            ),
            153 => 
            array (
                'customerNumber' => 286,
                'checkNumber' => 'DR578578',
                'paymentDate' => '2004-10-28',
                'amount' => '47411.33',
            ),
            154 => 
            array (
                'customerNumber' => 286,
                'checkNumber' => 'KH910279',
                'paymentDate' => '2004-09-05',
                'amount' => '43134.04',
            ),
            155 => 
            array (
                'customerNumber' => 298,
                'checkNumber' => 'AJ574927',
                'paymentDate' => '2004-03-13',
                'amount' => '47375.92',
            ),
            156 => 
            array (
                'customerNumber' => 298,
                'checkNumber' => 'LF501133',
                'paymentDate' => '2004-09-18',
                'amount' => '61402.00',
            ),
            157 => 
            array (
                'customerNumber' => 299,
                'checkNumber' => 'AD304085',
                'paymentDate' => '2003-10-24',
                'amount' => '36798.88',
            ),
            158 => 
            array (
                'customerNumber' => 299,
                'checkNumber' => 'NR157385',
                'paymentDate' => '2004-09-05',
                'amount' => '32260.16',
            ),
            159 => 
            array (
                'customerNumber' => 311,
                'checkNumber' => 'DG336041',
                'paymentDate' => '2005-02-15',
                'amount' => '46770.52',
            ),
            160 => 
            array (
                'customerNumber' => 311,
                'checkNumber' => 'FA728475',
                'paymentDate' => '2003-10-06',
                'amount' => '32723.04',
            ),
            161 => 
            array (
                'customerNumber' => 311,
                'checkNumber' => 'NQ966143',
                'paymentDate' => '2004-04-25',
                'amount' => '16212.59',
            ),
            162 => 
            array (
                'customerNumber' => 314,
                'checkNumber' => 'LQ244073',
                'paymentDate' => '2004-08-09',
                'amount' => '45352.47',
            ),
            163 => 
            array (
                'customerNumber' => 314,
                'checkNumber' => 'MD809704',
                'paymentDate' => '2004-03-03',
                'amount' => '16901.38',
            ),
            164 => 
            array (
                'customerNumber' => 319,
                'checkNumber' => 'HL685576',
                'paymentDate' => '2004-11-06',
                'amount' => '42339.76',
            ),
            165 => 
            array (
                'customerNumber' => 319,
                'checkNumber' => 'OM548174',
                'paymentDate' => '2003-12-07',
                'amount' => '36092.40',
            ),
            166 => 
            array (
                'customerNumber' => 320,
                'checkNumber' => 'GJ597719',
                'paymentDate' => '2005-01-18',
                'amount' => '8307.28',
            ),
            167 => 
            array (
                'customerNumber' => 320,
                'checkNumber' => 'HO576374',
                'paymentDate' => '2003-08-20',
                'amount' => '41016.75',
            ),
            168 => 
            array (
                'customerNumber' => 320,
                'checkNumber' => 'MU817160',
                'paymentDate' => '2003-11-24',
                'amount' => '52548.49',
            ),
            169 => 
            array (
                'customerNumber' => 321,
                'checkNumber' => 'DJ15149',
                'paymentDate' => '2003-11-03',
                'amount' => '85559.12',
            ),
            170 => 
            array (
                'customerNumber' => 321,
                'checkNumber' => 'LA556321',
                'paymentDate' => '2005-03-15',
                'amount' => '46781.66',
            ),
            171 => 
            array (
                'customerNumber' => 323,
                'checkNumber' => 'AL493079',
                'paymentDate' => '2005-05-23',
                'amount' => '75020.13',
            ),
            172 => 
            array (
                'customerNumber' => 323,
                'checkNumber' => 'ES347491',
                'paymentDate' => '2004-06-24',
                'amount' => '37281.36',
            ),
            173 => 
            array (
                'customerNumber' => 323,
                'checkNumber' => 'HG738664',
                'paymentDate' => '2003-07-05',
                'amount' => '2880.00',
            ),
            174 => 
            array (
                'customerNumber' => 323,
                'checkNumber' => 'PQ803830',
                'paymentDate' => '2004-12-24',
                'amount' => '39440.59',
            ),
            175 => 
            array (
                'customerNumber' => 324,
                'checkNumber' => 'DQ409197',
                'paymentDate' => '2004-12-13',
                'amount' => '13671.82',
            ),
            176 => 
            array (
                'customerNumber' => 324,
                'checkNumber' => 'FP443161',
                'paymentDate' => '2003-07-07',
                'amount' => '29429.14',
            ),
            177 => 
            array (
                'customerNumber' => 324,
                'checkNumber' => 'HB150714',
                'paymentDate' => '2003-11-23',
                'amount' => '37455.77',
            ),
            178 => 
            array (
                'customerNumber' => 328,
                'checkNumber' => 'EN930356',
                'paymentDate' => '2004-04-16',
                'amount' => '7178.66',
            ),
            179 => 
            array (
                'customerNumber' => 328,
                'checkNumber' => 'NR631421',
                'paymentDate' => '2004-05-30',
                'amount' => '31102.85',
            ),
            180 => 
            array (
                'customerNumber' => 333,
                'checkNumber' => 'HL209210',
                'paymentDate' => '2003-11-15',
                'amount' => '23936.53',
            ),
            181 => 
            array (
                'customerNumber' => 333,
                'checkNumber' => 'JK479662',
                'paymentDate' => '2003-10-17',
                'amount' => '9821.32',
            ),
            182 => 
            array (
                'customerNumber' => 333,
                'checkNumber' => 'NF959653',
                'paymentDate' => '2005-03-01',
                'amount' => '21432.31',
            ),
            183 => 
            array (
                'customerNumber' => 334,
                'checkNumber' => 'CS435306',
                'paymentDate' => '2005-01-27',
                'amount' => '45785.34',
            ),
            184 => 
            array (
                'customerNumber' => 334,
                'checkNumber' => 'HH517378',
                'paymentDate' => '2003-08-16',
                'amount' => '29716.86',
            ),
            185 => 
            array (
                'customerNumber' => 334,
                'checkNumber' => 'LF737277',
                'paymentDate' => '2004-05-22',
                'amount' => '28394.54',
            ),
            186 => 
            array (
                'customerNumber' => 339,
                'checkNumber' => 'AP286625',
                'paymentDate' => '2004-10-24',
                'amount' => '23333.06',
            ),
            187 => 
            array (
                'customerNumber' => 339,
                'checkNumber' => 'DA98827',
                'paymentDate' => '2003-11-28',
                'amount' => '34606.28',
            ),
            188 => 
            array (
                'customerNumber' => 344,
                'checkNumber' => 'AF246722',
                'paymentDate' => '2003-11-24',
                'amount' => '31428.21',
            ),
            189 => 
            array (
                'customerNumber' => 344,
                'checkNumber' => 'NJ906924',
                'paymentDate' => '2004-04-02',
                'amount' => '15322.93',
            ),
            190 => 
            array (
                'customerNumber' => 347,
                'checkNumber' => 'DG700707',
                'paymentDate' => '2004-01-18',
                'amount' => '21053.69',
            ),
            191 => 
            array (
                'customerNumber' => 347,
                'checkNumber' => 'LG808674',
                'paymentDate' => '2003-10-24',
                'amount' => '20452.50',
            ),
            192 => 
            array (
                'customerNumber' => 350,
                'checkNumber' => 'BQ602907',
                'paymentDate' => '2004-12-11',
                'amount' => '18888.31',
            ),
            193 => 
            array (
                'customerNumber' => 350,
                'checkNumber' => 'CI471510',
                'paymentDate' => '2003-05-25',
                'amount' => '50824.66',
            ),
            194 => 
            array (
                'customerNumber' => 350,
                'checkNumber' => 'OB648482',
                'paymentDate' => '2005-01-29',
                'amount' => '1834.56',
            ),
            195 => 
            array (
                'customerNumber' => 353,
                'checkNumber' => 'CO351193',
                'paymentDate' => '2005-01-10',
                'amount' => '49705.52',
            ),
            196 => 
            array (
                'customerNumber' => 353,
                'checkNumber' => 'ED878227',
                'paymentDate' => '2003-07-21',
                'amount' => '13920.26',
            ),
            197 => 
            array (
                'customerNumber' => 353,
                'checkNumber' => 'GT878649',
                'paymentDate' => '2003-05-21',
                'amount' => '16700.47',
            ),
            198 => 
            array (
                'customerNumber' => 353,
                'checkNumber' => 'HJ618252',
                'paymentDate' => '2005-06-09',
                'amount' => '46656.94',
            ),
            199 => 
            array (
                'customerNumber' => 357,
                'checkNumber' => 'AG240323',
                'paymentDate' => '2003-12-16',
                'amount' => '20220.04',
            ),
            200 => 
            array (
                'customerNumber' => 357,
                'checkNumber' => 'NB291497',
                'paymentDate' => '2004-05-15',
                'amount' => '36442.34',
            ),
            201 => 
            array (
                'customerNumber' => 362,
                'checkNumber' => 'FP170292',
                'paymentDate' => '2004-07-11',
                'amount' => '18473.71',
            ),
            202 => 
            array (
                'customerNumber' => 362,
                'checkNumber' => 'OG208861',
                'paymentDate' => '2004-09-21',
                'amount' => '15059.76',
            ),
            203 => 
            array (
                'customerNumber' => 363,
                'checkNumber' => 'HL575273',
                'paymentDate' => '2004-11-17',
                'amount' => '50799.69',
            ),
            204 => 
            array (
                'customerNumber' => 363,
                'checkNumber' => 'IS232033',
                'paymentDate' => '2003-01-16',
                'amount' => '10223.83',
            ),
            205 => 
            array (
                'customerNumber' => 363,
                'checkNumber' => 'PN238558',
                'paymentDate' => '2003-12-05',
                'amount' => '55425.77',
            ),
            206 => 
            array (
                'customerNumber' => 379,
                'checkNumber' => 'CA762595',
                'paymentDate' => '2005-02-12',
                'amount' => '28322.83',
            ),
            207 => 
            array (
                'customerNumber' => 379,
                'checkNumber' => 'FR499138',
                'paymentDate' => '2003-09-16',
                'amount' => '32680.31',
            ),
            208 => 
            array (
                'customerNumber' => 379,
                'checkNumber' => 'GB890854',
                'paymentDate' => '2004-08-02',
                'amount' => '12530.51',
            ),
            209 => 
            array (
                'customerNumber' => 381,
                'checkNumber' => 'BC726082',
                'paymentDate' => '2004-12-03',
                'amount' => '12081.52',
            ),
            210 => 
            array (
                'customerNumber' => 381,
                'checkNumber' => 'CC475233',
                'paymentDate' => '2003-04-19',
                'amount' => '1627.56',
            ),
            211 => 
            array (
                'customerNumber' => 381,
                'checkNumber' => 'GB117430',
                'paymentDate' => '2005-02-03',
                'amount' => '14379.90',
            ),
            212 => 
            array (
                'customerNumber' => 381,
                'checkNumber' => 'MS154481',
                'paymentDate' => '2003-08-22',
                'amount' => '1128.20',
            ),
            213 => 
            array (
                'customerNumber' => 382,
                'checkNumber' => 'CC871084',
                'paymentDate' => '2003-05-12',
                'amount' => '35826.33',
            ),
            214 => 
            array (
                'customerNumber' => 382,
                'checkNumber' => 'CT821147',
                'paymentDate' => '2004-08-01',
                'amount' => '6419.84',
            ),
            215 => 
            array (
                'customerNumber' => 382,
                'checkNumber' => 'PH29054',
                'paymentDate' => '2004-11-27',
                'amount' => '42813.83',
            ),
            216 => 
            array (
                'customerNumber' => 385,
                'checkNumber' => 'BN347084',
                'paymentDate' => '2003-12-02',
                'amount' => '20644.24',
            ),
            217 => 
            array (
                'customerNumber' => 385,
                'checkNumber' => 'CP804873',
                'paymentDate' => '2004-11-19',
                'amount' => '15822.84',
            ),
            218 => 
            array (
                'customerNumber' => 385,
                'checkNumber' => 'EK785462',
                'paymentDate' => '2003-03-09',
                'amount' => '51001.22',
            ),
            219 => 
            array (
                'customerNumber' => 386,
                'checkNumber' => 'DO106109',
                'paymentDate' => '2003-11-18',
                'amount' => '38524.29',
            ),
            220 => 
            array (
                'customerNumber' => 386,
                'checkNumber' => 'HG438769',
                'paymentDate' => '2004-07-18',
                'amount' => '51619.02',
            ),
            221 => 
            array (
                'customerNumber' => 398,
                'checkNumber' => 'AJ478695',
                'paymentDate' => '2005-02-14',
                'amount' => '33967.73',
            ),
            222 => 
            array (
                'customerNumber' => 398,
                'checkNumber' => 'DO787644',
                'paymentDate' => '2004-06-21',
                'amount' => '22037.91',
            ),
            223 => 
            array (
                'customerNumber' => 398,
                'checkNumber' => 'JPMR4544',
                'paymentDate' => '2005-05-18',
                'amount' => '615.45',
            ),
            224 => 
            array (
                'customerNumber' => 398,
                'checkNumber' => 'KB54275',
                'paymentDate' => '2004-11-29',
                'amount' => '48927.64',
            ),
            225 => 
            array (
                'customerNumber' => 406,
                'checkNumber' => 'BJMPR4545',
                'paymentDate' => '2005-04-23',
                'amount' => '12190.85',
            ),
            226 => 
            array (
                'customerNumber' => 406,
                'checkNumber' => 'HJ217687',
                'paymentDate' => '2004-01-28',
                'amount' => '49165.16',
            ),
            227 => 
            array (
                'customerNumber' => 406,
                'checkNumber' => 'NA197101',
                'paymentDate' => '2004-06-17',
                'amount' => '25080.96',
            ),
            228 => 
            array (
                'customerNumber' => 412,
                'checkNumber' => 'GH197075',
                'paymentDate' => '2004-07-25',
                'amount' => '35034.57',
            ),
            229 => 
            array (
                'customerNumber' => 412,
                'checkNumber' => 'PJ434867',
                'paymentDate' => '2004-04-14',
                'amount' => '31670.37',
            ),
            230 => 
            array (
                'customerNumber' => 415,
                'checkNumber' => 'ER54537',
                'paymentDate' => '2004-09-28',
                'amount' => '31310.09',
            ),
            231 => 
            array (
                'customerNumber' => 424,
                'checkNumber' => 'KF480160',
                'paymentDate' => '2004-12-07',
                'amount' => '25505.98',
            ),
            232 => 
            array (
                'customerNumber' => 424,
                'checkNumber' => 'LM271923',
                'paymentDate' => '2003-04-16',
                'amount' => '21665.98',
            ),
            233 => 
            array (
                'customerNumber' => 424,
                'checkNumber' => 'OA595449',
                'paymentDate' => '2003-10-31',
                'amount' => '22042.37',
            ),
            234 => 
            array (
                'customerNumber' => 447,
                'checkNumber' => 'AO757239',
                'paymentDate' => '2003-09-15',
                'amount' => '6631.36',
            ),
            235 => 
            array (
                'customerNumber' => 447,
                'checkNumber' => 'ER615123',
                'paymentDate' => '2003-06-25',
                'amount' => '17032.29',
            ),
            236 => 
            array (
                'customerNumber' => 447,
                'checkNumber' => 'OU516561',
                'paymentDate' => '2004-12-17',
                'amount' => '26304.13',
            ),
            237 => 
            array (
                'customerNumber' => 448,
                'checkNumber' => 'FS299615',
                'paymentDate' => '2005-04-18',
                'amount' => '27966.54',
            ),
            238 => 
            array (
                'customerNumber' => 448,
                'checkNumber' => 'KR822727',
                'paymentDate' => '2004-09-30',
                'amount' => '48809.90',
            ),
            239 => 
            array (
                'customerNumber' => 450,
                'checkNumber' => 'EF485824',
                'paymentDate' => '2004-06-21',
                'amount' => '59551.38',
            ),
            240 => 
            array (
                'customerNumber' => 452,
                'checkNumber' => 'ED473873',
                'paymentDate' => '2003-11-15',
                'amount' => '27121.90',
            ),
            241 => 
            array (
                'customerNumber' => 452,
                'checkNumber' => 'FN640986',
                'paymentDate' => '2003-11-20',
                'amount' => '15130.97',
            ),
            242 => 
            array (
                'customerNumber' => 452,
                'checkNumber' => 'HG635467',
                'paymentDate' => '2005-05-03',
                'amount' => '8807.12',
            ),
            243 => 
            array (
                'customerNumber' => 455,
                'checkNumber' => 'HA777606',
                'paymentDate' => '2003-12-05',
                'amount' => '38139.18',
            ),
            244 => 
            array (
                'customerNumber' => 455,
                'checkNumber' => 'IR662429',
                'paymentDate' => '2004-05-12',
                'amount' => '32239.47',
            ),
            245 => 
            array (
                'customerNumber' => 456,
                'checkNumber' => 'GJ715659',
                'paymentDate' => '2004-11-13',
                'amount' => '27550.51',
            ),
            246 => 
            array (
                'customerNumber' => 456,
                'checkNumber' => 'MO743231',
                'paymentDate' => '2004-04-30',
                'amount' => '1679.92',
            ),
            247 => 
            array (
                'customerNumber' => 458,
                'checkNumber' => 'DD995006',
                'paymentDate' => '2004-11-15',
                'amount' => '33145.56',
            ),
            248 => 
            array (
                'customerNumber' => 458,
                'checkNumber' => 'NA377824',
                'paymentDate' => '2004-02-06',
                'amount' => '22162.61',
            ),
            249 => 
            array (
                'customerNumber' => 458,
                'checkNumber' => 'OO606861',
                'paymentDate' => '2003-06-13',
                'amount' => '57131.92',
            ),
            250 => 
            array (
                'customerNumber' => 462,
                'checkNumber' => 'ED203908',
                'paymentDate' => '2005-04-15',
                'amount' => '30293.77',
            ),
            251 => 
            array (
                'customerNumber' => 462,
                'checkNumber' => 'GC60330',
                'paymentDate' => '2003-11-08',
                'amount' => '9977.85',
            ),
            252 => 
            array (
                'customerNumber' => 462,
                'checkNumber' => 'PE176846',
                'paymentDate' => '2004-11-27',
                'amount' => '48355.87',
            ),
            253 => 
            array (
                'customerNumber' => 471,
                'checkNumber' => 'AB661578',
                'paymentDate' => '2004-07-28',
                'amount' => '9415.13',
            ),
            254 => 
            array (
                'customerNumber' => 471,
                'checkNumber' => 'CO645196',
                'paymentDate' => '2003-12-10',
                'amount' => '35505.63',
            ),
            255 => 
            array (
                'customerNumber' => 473,
                'checkNumber' => 'LL427009',
                'paymentDate' => '2004-02-17',
                'amount' => '7612.06',
            ),
            256 => 
            array (
                'customerNumber' => 473,
                'checkNumber' => 'PC688499',
                'paymentDate' => '2003-10-27',
                'amount' => '17746.26',
            ),
            257 => 
            array (
                'customerNumber' => 475,
                'checkNumber' => 'JP113227',
                'paymentDate' => '2003-12-09',
                'amount' => '7678.25',
            ),
            258 => 
            array (
                'customerNumber' => 475,
                'checkNumber' => 'PB951268',
                'paymentDate' => '2004-02-13',
                'amount' => '36070.47',
            ),
            259 => 
            array (
                'customerNumber' => 484,
                'checkNumber' => 'GK294076',
                'paymentDate' => '2004-10-26',
                'amount' => '3474.66',
            ),
            260 => 
            array (
                'customerNumber' => 484,
                'checkNumber' => 'JH546765',
                'paymentDate' => '2003-11-29',
                'amount' => '47513.19',
            ),
            261 => 
            array (
                'customerNumber' => 486,
                'checkNumber' => 'BL66528',
                'paymentDate' => '2004-04-14',
                'amount' => '5899.38',
            ),
            262 => 
            array (
                'customerNumber' => 486,
                'checkNumber' => 'HS86661',
                'paymentDate' => '2004-11-23',
                'amount' => '45994.07',
            ),
            263 => 
            array (
                'customerNumber' => 486,
                'checkNumber' => 'JB117768',
                'paymentDate' => '2003-03-20',
                'amount' => '25833.14',
            ),
            264 => 
            array (
                'customerNumber' => 487,
                'checkNumber' => 'AH612904',
                'paymentDate' => '2003-09-28',
                'amount' => '29997.09',
            ),
            265 => 
            array (
                'customerNumber' => 487,
                'checkNumber' => 'PT550181',
                'paymentDate' => '2004-02-29',
                'amount' => '12573.28',
            ),
            266 => 
            array (
                'customerNumber' => 489,
                'checkNumber' => 'OC773849',
                'paymentDate' => '2003-12-04',
                'amount' => '22275.73',
            ),
            267 => 
            array (
                'customerNumber' => 489,
                'checkNumber' => 'PO860906',
                'paymentDate' => '2004-01-31',
                'amount' => '7310.42',
            ),
            268 => 
            array (
                'customerNumber' => 495,
                'checkNumber' => 'BH167026',
                'paymentDate' => '2003-12-26',
                'amount' => '59265.14',
            ),
            269 => 
            array (
                'customerNumber' => 495,
                'checkNumber' => 'FN155234',
                'paymentDate' => '2004-05-14',
                'amount' => '6276.60',
            ),
            270 => 
            array (
                'customerNumber' => 496,
                'checkNumber' => 'EU531600',
                'paymentDate' => '2005-05-25',
                'amount' => '30253.75',
            ),
            271 => 
            array (
                'customerNumber' => 496,
                'checkNumber' => 'MB342426',
                'paymentDate' => '2003-07-16',
                'amount' => '32077.44',
            ),
            272 => 
            array (
                'customerNumber' => 496,
                'checkNumber' => 'MN89921',
                'paymentDate' => '2004-12-31',
                'amount' => '52166.00',
            ),
        ));
        
        
    }
}
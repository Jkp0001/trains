<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Trainseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains') ->insert([
            [
                'name' => 'Renfe',
                'passengers' => 200,
                'year' => '1999-10-12',    //(Y-m-d) like (2019-12-31)
                'train_type_id' => '1'
            ],

            [
                'name' => 'Tren bala',
                'passengers' => 300,
                'year' => '2005-05-11',    //(Y-m-d) like (2019-12-31)
                'train_type_id' => '2'
            ],

            [
                'name' => 'Polar Express',
                'passengers' => 500,
                'year' => '1985-04-01',    //(Y-m-d) like (2019-12-31)
                'train_type_id' => '3'
            ]
        ]);
    }
}

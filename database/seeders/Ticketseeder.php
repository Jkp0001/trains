<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Ticketseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets') ->insert([
            [
                'date' => '1999-10-12',
                'price' => 3,
                'train_id' => '1',    //(Y-m-d) like (2019-12-31)
                'ticket_type_id' => '1'
            ],

            [
                'date' => '2000-10-12',
                'price' => 7,
                'train_id' => '2',    //(Y-m-d) like (2019-12-31)
                'ticket_type_id' => '2'
            ],

            [
                'date' => '2001-10-12',
                'price' => 10,
                'train_id' => '3',    //(Y-m-d) like (2019-12-31)
                'ticket_type_id' => '3'
            ]
        ]);
    }
}

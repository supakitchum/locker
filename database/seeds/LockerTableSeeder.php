<?php

use Illuminate\Database\Seeder;

class LockerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lockers')->insert([
                0 =>
                    [
                        'id' => 1,
                        'size' => 'S',
                        'first_charge' => 50,
                        'next_charge' => 25,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                1 =>
                    [
                        'id' => 4,
                        'size' => 'S',
                        'first_charge' => 50,
                        'next_charge' => 25,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                2 =>
                    [
                        'id' => 7,
                        'size' => 'S',
                        'first_charge' => 50,
                        'next_charge' => 25,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                3 =>
                    [
                        'id' => 10,
                        'size' => 'S',
                        'first_charge' => 50,
                        'next_charge' => 25,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                4 =>
                    [
                        'id' => 2,
                        'size' => 'M',
                        'first_charge' => 100,
                        'next_charge' => 50,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                5 =>
                    [
                        'id' => 5,
                        'size' => 'M',
                        'first_charge' => 100,
                        'next_charge' => 50,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                6 =>
                    [
                        'id' => 8,
                        'size' => 'M',
                        'first_charge' => 100,
                        'next_charge' => 50,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                7 =>
                    [
                        'id' => 11,
                        'size' => 'M',
                        'first_charge' => 100,
                        'next_charge' => 50,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                7 =>
                    [
                        'id' => 3,
                        'size' => 'L',
                        'first_charge' => 200,
                        'next_charge' => 100,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                7 =>
                    [
                        'id' => 6,
                        'size' => 'L',
                        'first_charge' => 200,
                        'next_charge' => 100,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                7 =>
                    [
                        'id' => 9,
                        'size' => 'L',
                        'first_charge' => 200,
                        'next_charge' => 100,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                7 =>
                    [
                        'id' => 12,
                        'size' => 'L',
                        'first_charge' => 200,
                        'next_charge' => 100,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]
            ]
        );
    }
}

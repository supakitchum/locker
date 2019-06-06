<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                0 =>
                    [
                        'name' => 'adam',
                        'email' => 'adam@test.com',
                        'password' => bcrypt('1234'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                1 =>
                    [
                        'name' => 'john',
                        'email' => 'john@test.com',
                        'password' => bcrypt('1234'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]
            ]
        );
    }
}

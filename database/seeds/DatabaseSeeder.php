<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('people')->insert([
            'name' => 'luis',
            'dni' => '77287646',
            'telf' => '4354012',
            'direccion' => 'Horacio Xevallos',
            'state' => 1,
            'fech_create' => '2017/03/03',
       ]);
        DB::table('users')->insert([
            'person_id' => 1,
            'email' => 'luis@gmail.com',
            'password' => bcrypt('123123'),
            'state' => 1,
       ]);
    }
}

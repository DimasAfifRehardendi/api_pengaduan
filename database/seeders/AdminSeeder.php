<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'id'=> 1,
        	'nik' => 3562730001,
        	'nama' => 'Dimas',
        	'telp' => '082177371875',
            'username' => '@Dimas.com',
            'password' => bcrypt('Dimas'),
        	'level' => 'admin'
        ]);
    }
}

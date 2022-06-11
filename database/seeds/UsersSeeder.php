<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'	=> 'Admin',
            'email'	=> 'admin@surat.com',
            'password'	=> bcrypt('password'),
            'role'	=> 'admin'
        ]);

        \App\User::create([
            'name'	=> 'Petugas',
            'email'	=> 'petugas@surat.com',
            'password'	=> bcrypt('password'),
            'role'	=> 'petugas'
        ]);
    }
}

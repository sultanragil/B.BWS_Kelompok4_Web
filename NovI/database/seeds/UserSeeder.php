<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => \Hash::make('admin'),
            'job' => '1',
            'foto' => 'test1.jpg',
            'deskripsi' => 'Testing Auth Api'
        ]);
    }
}

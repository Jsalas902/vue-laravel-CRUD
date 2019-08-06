<?php

use App\User;
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
        User::create([
            'name' => 'Jainner',
            'email' => 'hola@programacion.com',
            'password' => bcrypt('1234')
        ]);
    }
}

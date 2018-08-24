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
        App\User::create([
            'name'=>'admin',
            'email'=>'admin@hotmail.com',
            'password'=>bcrypt('admin'),
            'type_user'=>2
        ]);
    }
}

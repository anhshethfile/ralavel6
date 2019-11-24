<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
       DB::table('users')->insert([
       		'role_id' => '1',
       		'name' => 'Mr.Administrator',
       		'username' => 'admin',
       		'email' => 'admin@admin.com',
       		'password' => bcrypt('12345678'),
       ]);

       DB::table('users')->insert([
       		'role_id' => '2',
       		'name' => 'Mr.Author',
       		'username' => 'author',
       		'email' => 'author@author.com',
       		'password' => bcrypt('12345678'),
       ]);    
    }
}

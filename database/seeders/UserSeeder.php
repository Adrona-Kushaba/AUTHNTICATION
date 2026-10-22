<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin = user::create([
       'name'=>'Marvin',
       'email'=>'marvin@gmail.com',
       'password'=>Hash::make('adro@2026'),

        ]);
        $admin->assignRole('admin');

        $user = user::create([
       'name'=>'adrona',
       'email'=>'adrona@gmail.com',
       'password'=>Hash::make('password'),
       
        ]);
        $user->assignRole('user');
 
    }
}

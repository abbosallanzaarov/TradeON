<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin =  User::create([
            'name'=> 'Abbos',
            'phone' => '0000000',
            'email'=> 'allanazarovabbos@gmail.com',
            'password'=> 'abbos7677',
            'image' => 'http://foto.png'
        ]);
        $admin->roles()->attach(1);
        User::factory()->count(20)->hasAttached(Role::find(rand(2,3)))->create();
    }
}

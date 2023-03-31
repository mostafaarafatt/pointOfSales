<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'email' => 'super_admin@yahoo.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->attachRole('super_admin');

       
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // User::factory(9)->create([
        //     'roles' => 'user',
        // ]);

        // User::create([
        //     'name' => 'Irfan',
        //     'email' => 'irfan@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('user1234'),
        //     'roles' => 'user',
        // ]);

        // User::factory(9)->create([
        //     'roles' => 'admin',
        // ]);

        // User::create([
        //     'name' => 'Ardi',
        //     'email' => 'ardi@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('admin1234'),
        //     'roles' => 'admin',
        // ]);
    }
}

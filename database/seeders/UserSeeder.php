<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Alham Manazil',
            'username' => 'alhammanazil',
            'email' => 'alhammanazil@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('alhammanazil'),
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Aria Kusuma Wijaya',
            'username' => 'ariawijaya',
            'email' => 'aria.wijaya@macrominds.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Kirana Sari Dewi',
            'username' => 'kiranasari',
            'email' => 'kirana.dewi@macrominds.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Bayu Pradana Kusuma',
            'username' => 'bayupradana',
            'email' => 'bayu.pradana@macrominds.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Dinda Maharani Putri',
            'username' => 'dindamaharani',
            'email' => 'dinda.maharani@macrominds.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}

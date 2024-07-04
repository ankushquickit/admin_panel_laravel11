<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(10)->create();
        // User::create([
        //     'name' => fake()->name(),
        //     'email' => fake()->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => static::$password ??= \Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        \DB::table('users')->insert([
            [
                'name' => "superadmin",
                'email' => "superadmin@gmail.com",
                'user_type' =>"superadmin",
                'email_verified_at' => now(),
                'password' => "123456789",
                // 'password' => static::$password ??= \Hash::make('password'),
                'remember_token' => \Str::random(10),
                
            ],
            [
                'name' => "admin",
                'email' => "admin@gmail.com",
                'user_type' =>"admin",
                'email_verified_at' => now(),
                'password' => "123456789",
                // 'password' => static::$password ??= \Hash::make('password'),
                'remember_token' => \Str::random(10),
            ],
            [
                'name' => "Ankush Pandey",
                'email' => "ankush@gmail.com",
                'user_type' =>"user",
                'email_verified_at' => now(),
                'password' => "123456789",
                // 'password' => static::$password ??= \Hash::make('password'),
                'remember_token' => \Str::random(10),
            ]
        ]);
        // add_column columns
        
    }
}

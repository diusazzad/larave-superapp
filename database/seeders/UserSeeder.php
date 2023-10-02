<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'roleId' => 1, // Assuming a role with id 1 exists
            'firstName' => 'John',
            'middleName' => 'Doe',
            'lastName' => 'Smith',
            'mobile' => '1234567890',
            'email' => 'john@example.com',
            'passwordHash' => Hash::make('password'),
            'registeredAt' => Carbon::now(),
            'lastLogin' => Carbon::now(),
            'intro' => 'Intro of the user',
            'profile' => 'Profile of the user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

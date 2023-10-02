<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'title' => 'Admin',
            'slug' => Str::slug('Admin', '-'),
            'description' => 'Admin role',
            'active' => 1,
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
            'content' => 'Admin role content',
        ]);
    }
}

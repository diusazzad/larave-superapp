<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            'title' => 'Manage Users',
            'slug' => Str::slug('Manage Users', '-'),
            'description' => 'Permission to manage users',
            'active' => 1,
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
            'content' => 'Permission to manage users content',
        ]);
    }
}

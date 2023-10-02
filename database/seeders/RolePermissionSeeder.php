<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_permissions')->insert([
            'roleId' => 1, // Assuming a role with id 1 exists
            'permissionId' => 1, // Assuming a permission with id 1 exists
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
        ]);

    }
}

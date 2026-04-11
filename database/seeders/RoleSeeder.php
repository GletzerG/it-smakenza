<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Roles
    $admin = Role::create(['name' => 'admin']);
    $superadmin = Role::create(['name' => 'superadmin']);
    $teacher = Role::create(['name' => 'teacher']);
    $student = Role::create(['name' => 'student']);
    }
}

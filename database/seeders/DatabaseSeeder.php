<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        User::factory()->create([
            'email' => 'admin123@example.com',
            'password' => '123123',
        ])->assignRole('superadmin');

        $teacher = User::factory()->create([
            'name' => 'taufik',
            'email' => 'teacher123@example.com',
            'password' => '123123',
        ]);
        $teacher->assignRole('teacher');
        $teacher->teacher()->create([
            'nip' => '1234567890',
            'vocational' => 'Teknik Komputer dan Jaringan',
        ]);

        $student = User::factory()->create([
            'email' => 'student123@example.com',
            'password' => '123123',
        ]);

        $student->assignRole('student');
        $student->student()->create([
            'nis' => '1234567890',
            'contact_number' => '081234567890',
            'adress' => 'Jl. Contoh Alamat No. 123, Kota Contoh',
            'class' => 'XII IPA 1',
        ]);
        
    }
}

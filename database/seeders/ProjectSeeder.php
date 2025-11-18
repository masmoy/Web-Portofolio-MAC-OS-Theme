<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project; // 1. PENTING: Panggil Model Project kita

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 2. Hapus data lama (jika ada) agar tidak duplikat
        Project::truncate();

        // 3. Masukkan data proyek kita
        Project::create([
            'title' => 'WarTek POS',
            'description' => 'Aplikasi Point of Sale berbasis web dengan Django & Vue.js.',
            'year' => 2025
        ]);

        Project::create([
            'title' => 'MC Portfolio',
            'description' => 'Website portofolio MC profesional dengan sistem booking (Laravel).',
            'year' => 2025
        ]);

        Project::create([
            'title' => 'Aplikasi After Sales Anker',
            'description' => 'Sistem manajemen klaim garansi (Python/Django).',
            'year' => 2025
        ]);

        // (Kamu bisa tambahkan Project::create([...]) lain di sini)
    }
}
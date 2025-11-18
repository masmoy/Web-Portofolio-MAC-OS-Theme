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
    // Panggil ProjectSeeder yang baru saja kita buat
    $this->call([
        ProjectSeeder::class,
    ]);

    // (Kamu bisa memanggil seeder lain di sini nanti)
}
}

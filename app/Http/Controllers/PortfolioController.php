<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // 1. PENTING: Panggil Model Project

class PortfolioController extends Controller
{
    /**
     * Tampilkan halaman portofolio utama.
     */
    public function index()
    {
        // 2. Ambil SEMUA data dari tabel 'projects'
        $projects = Project::all();

        // 3. Kirim data 'projects' itu ke view 'portfolio'
        return view('portfolio', [
            'projects' => $projects
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Studi S1 - Bachelor',
                'description' => 'Layanan konsultasi untuk pendidikan di luar negeri',
                'image' => 'bachelor.png'
            ],
            [
                'title' => 'Studi S2 Master',
                'description' => 'Bantuan pengurusan visa dan dokumen imigrasi',
                'image' => 'master.png'
            ],
            [
                'title' => 'Studi S3 - Ph.D',
                'description' => 'Membantu mendapatkan beasiswa studi',
                'image' => 'phd.jpg'
            ],
            [
                'title' => 'Kursus Bahasa Asing',
                'description' => 'Persiapan IELTS, TOEFL, dan tes lainnya',
                'image' => 'kursus.png'
            ],
            [
                'title' => 'Study Tour',
                'description' => 'Bantuan mencari tempat tinggal',
                'image' => 'studytour.png'
            ],
            [
                'title' => 'Ausbildung',
                'description' => 'Konseling karir dan perencanaan masa depan',
                'image' => 'ausbildung.jpg'
            ]
        ];

        $partners = [
            ['name' => 'aviation', 'logo' => 'aviation.jpg'],
            ['name' => 'adrew', 'logo' => 'adrew.png'],
            ['name' => 'Partner 3', 'logo' => 'htw.png'],
            ['name' => 'Partner 4', 'logo' => 'studygroup.png']
        ];

        return view('home', compact('services', 'partners'));
    }

    public function register()
    {
        return view('register');
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        // Implement search logic here
        return view('search', compact('query'));
    }
}
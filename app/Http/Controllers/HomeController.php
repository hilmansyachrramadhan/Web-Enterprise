<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Konsultasi Pendidikan',
                'description' => 'Layanan konsultasi untuk pendidikan di luar negeri',
                'image' => 'service1.jpg'
            ],
            [
                'title' => 'Visa & Imigrasi',
                'description' => 'Bantuan pengurusan visa dan dokumen imigrasi',
                'image' => 'service2.jpg'
            ],
            [
                'title' => 'Pengurusan Beasiswa',
                'description' => 'Membantu mendapatkan beasiswa studi',
                'image' => 'service3.jpg'
            ],
            [
                'title' => 'Persiapan Tes',
                'description' => 'Persiapan IELTS, TOEFL, dan tes lainnya',
                'image' => 'service4.jpg'
            ],
            [
                'title' => 'Akomodasi',
                'description' => 'Bantuan mencari tempat tinggal',
                'image' => 'service5.jpg'
            ],
            [
                'title' => 'Career Counseling',
                'description' => 'Konseling karir dan perencanaan masa depan',
                'image' => 'service6.jpg'
            ]
        ];

        $partners = [
            ['name' => 'Partner 1', 'logo' => 'partner1.png'],
            ['name' => 'Partner 2', 'logo' => 'partner2.png'],
            ['name' => 'Partner 3', 'logo' => 'partner3.png'],
            ['name' => 'Partner 4', 'logo' => 'partner4.png']
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
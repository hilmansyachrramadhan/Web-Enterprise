<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Studi S1 - Bachelor',
                'description' => 'Kami membantu Anda memilih universitas dan program studi yang sesuai dengan minat, kemampuan, dan tujuan karir Anda.',
                'image' => 'bachelor.png',
                'icon' => 'fas fa-university'
            ],
            [
                'title' => 'Studi S2 - Master',
                'description' => 'Bantuan lengkap dalam menyiapkan semua dokumen yang diperlukan untuk aplikasi universitas luar negeri.',
                'image' => 'master.png',
                'icon' => 'fas fa-file-alt'
            ],
            [
                'title' => 'Studi S3 - Ph.D',
                'description' => 'Program persiapan intensif untuk tes kemampuan bahasa Inggris IELTS dan TOEFL.',
                'image' => 'phd.jpg',
                'icon' => 'fas fa-book-reader'
            ],
            [
                'title' => 'Kursus Bahasa Asing',
                'description' => 'Panduan lengkap dan pendampingan dalam proses pengajuan visa pelajar ke berbagai negara.',
                'image' => 'kursus.png',
                'icon' => 'fas fa-passport'
            ],
            [
                'title' => 'Study Tour',
                'description' => 'Informasi dan bantuan aplikasi beasiswa dari berbagai sumber untuk meringankan biaya pendidikan Anda.',
                'image' => 'studytour.png',
                'icon' => 'fas fa-graduation-cap'
            ],
            [
                'title' => 'Ausbildung',
                'description' => 'Persiapan sebelum keberangkatan termasuk informasi akomodasi, budaya, dan tips hidup di luar negeri.',
                'image' => 'ausbildung.jpg',
                'icon' => 'fas fa-plane-departure'
            ]
        ];

        return view('posts.services', compact('services'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'id' => 1,
                'title' => '10 Tips Memilih Universitas di Luar Negeri',
                'excerpt' => 'Panduan lengkap untuk memilih universitas yang tepat sesuai dengan tujuan karir Anda...',
                'image' => 'article1.jpg',
                'category' => 'Tips',
                'date' => '2024-10-15',
                'badge_color' => 'primary'
            ],
            [
                'id' => 2,
                'title' => 'Cara Mendapatkan Beasiswa Penuh ke Luar Negeri',
                'excerpt' => 'Strategi jitu untuk memenangkan beasiswa full scholarship ke universitas impian Anda...',
                'image' => 'article2.jpg',
                'category' => 'Beasiswa',
                'date' => '2024-10-12',
                'badge_color' => 'success'
            ],
            [
                'id' => 3,
                'title' => 'Persiapan IELTS: Strategi Skor 7.0+',
                'excerpt' => 'Tips dan trik untuk mendapatkan skor IELTS yang tinggi dalam waktu singkat...',
                'image' => 'article3.jpg',
                'category' => 'Persiapan',
                'date' => '2024-10-10',
                'badge_color' => 'warning'
            ],
            [
                'id' => 4,
                'title' => '5 Negara Terbaik untuk Kuliah di Eropa',
                'excerpt' => 'Rekomendasi negara-negara Eropa dengan sistem pendidikan terbaik dan biaya terjangkau...',
                'image' => 'article4.jpg',
                'category' => 'Destinasi',
                'date' => '2024-10-08',
                'badge_color' => 'info'
            ],
            [
                'id' => 5,
                'title' => 'Panduan Lengkap Mengurus Visa Pelajar',
                'excerpt' => 'Step by step proses pengajuan visa pelajar ke berbagai negara tujuan...',
                'image' => 'article5.jpg',
                'category' => 'Visa',
                'date' => '2024-10-05',
                'badge_color' => 'danger'
            ],
            [
                'id' => 6,
                'title' => 'Kehidupan Mahasiswa Indonesia di Luar Negeri',
                'excerpt' => 'Kisah dan pengalaman mahasiswa Indonesia yang kuliah di berbagai negara...',
                'image' => 'article6.jpg',
                'category' => 'Lifestyle',
                'date' => '2024-10-01',
                'badge_color' => 'secondary'
            ]
        ];

        return view('posts.articles', compact('articles'));
    }
    
    public function show($id)
    {
        // Nanti bisa ambil dari database
        // $article = Article::findOrFail($id);
        
        $article = [
            'id' => $id,
            'title' => '10 Tips Memilih Universitas di Luar Negeri',
            'content' => 'Konten artikel lengkap di sini...',
            'image' => 'article1.jpg',
            'category' => 'Tips',
            'date' => '2024-10-15',
            'author' => 'Tim KLUG'
        ];
        
        return view('article-detail', compact('article'));
    }
}
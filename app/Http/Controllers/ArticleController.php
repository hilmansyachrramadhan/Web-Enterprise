<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $values = [
            [
                'title' => 'Profesionalisme',
                'description' => 'Kami berkomitmen memberikan layanan profesional terbaik',
                'image' => 'value1.jpg'
            ],
            [
                'title' => 'Integritas',
                'description' => 'Kejujuran dan transparansi adalah prioritas kami',
                'image' => 'value2.jpg'
            ],
            [
                'title' => 'Dedikasi',
                'description' => 'Dedikasi penuh untuk kesuksesan Anda',
                'image' => 'value3.jpg'
            ]
        ];

      return view('posts.article', compact('values'));

    }
}
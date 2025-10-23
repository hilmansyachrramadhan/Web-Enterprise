<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        
        // Simulasi hasil pencarian
        $results = [];
        
        if ($query) {
            // Nanti bisa implementasi pencarian dari database
            // $results = Article::where('title', 'LIKE', "%{$query}%")
            //     ->orWhere('content', 'LIKE', "%{$query}%")
            //     ->get();
            
            // Untuk sementara hasil dummy
            $results = [
                [
                    'title' => 'Hasil pencarian untuk: ' . $query,
                    'description' => 'Deskripsi hasil pencarian...',
                    'url' => route('articles'),
                    'type' => 'Artikel'
                ]
            ];
        }
        
        return view('search', compact('query', 'results'));
    }
}

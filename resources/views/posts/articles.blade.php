@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <div class="article-section">
        <div class="container">
            <h1 class="article-title">Artikel Terbaru</h1>
            <p class="article-subtitle">
                Baca artikel dan berita terbaru seputar teknologi, bisnis, dan inovasi digital.
            </p>

            <div class="article-grid">
                @foreach ([
                    [
                        'title' => 'Tren Teknologi 2025',
                        'excerpt' => 'Mengenal arah perkembangan teknologi yang akan membentuk masa depan digital...',
                        'image' => 'article1.jpg',
                        'date' => 'Oktober 2025'
                    ],
                    [
                        'title' => 'Tips Sukses Digital Marketing',
                        'excerpt' => 'Strategi pemasaran digital yang efektif untuk meningkatkan penjualan online Anda...',
                        'image' => 'article2.jpg',
                        'date' => 'September 2025'
                    ],
                    [
                        'title' => 'Inovasi Otomasi di Dunia Industri',
                        'excerpt' => 'Bagaimana sistem otomatisasi membantu bisnis meningkatkan efisiensi...',
                        'image' => 'article3.jpg',
                        'date' => 'Agustus 2025'
                    ]
                ] as $article)
                    <div class="article-card">
                        <img src="{{ asset('images/' . $article['image']) }}" alt="{{ $article['title'] }}" class="article-image">
                        <div class="article-content">
                            <h3 class="article-item-title">{{ $article['title'] }}</h3>
                            <p class="article-date">{{ $article['date'] }}</p>
                            <p class="article-excerpt">{{ $article['excerpt'] }}</p>
                            <a href="#" class="article-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Section utama */
    .article-section {
        padding: 80px 0;
        background: #f9f9f9;
        min-height: 100vh;
    }

    /* Container */
    .container {
        width: 90%;
        max-width: 1100px;
        margin: 0 auto;
        text-align: center;
    }

    /* Judul utama */
    .article-title {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .article-subtitle {
        font-size: 16px;
        color: #666;
        margin-bottom: 50px;
    }

    /* Grid layout */
    .article-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    /* Kartu artikel */
    .article-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: left;
    }

    .article-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .article-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .article-content {
        padding: 20px;
    }

    .article-item-title {
        font-size: 20px;
        color: #1a73e8;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .article-date {
        font-size: 13px;
        color: #999;
        margin-bottom: 10px;
    }

    .article-excerpt {
        font-size: 15px;
        color: #555;
        margin-bottom: 15px;
        line-height: 1.5;
    }

    .article-btn {
        display: inline-block;
        padding: 8px 16px;
        background: #1a73e8;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .article-btn:hover {
        background: #1257b7;
    }
</style>
@endpush

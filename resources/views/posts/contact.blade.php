@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')

<style>
    .hero-layanan-section {
        position: relative;
        height: 450px; 
        overflow: hidden;
        margin-top: -65px; 
        z-index: 1; 
        width: 100%;
    }

    .hero-layanan-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(70%); 
    }
    
    .hero-layanan-content h1 {
        color: white; 
        font-size: 1.5rem;
        margin-bottom: 25px;
        margin-top: 0; 
        font-weight: 700;
        text-align: left; 
    }

    .hero-layanan-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(to right, #793c81ff , transparent 30%);
        display: flex;
        align-items: flex-end; 
        padding-left: 5%; 
        padding-right: 5%;
    }

    .container {
        max-width: 800px;
    }

    .massage {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }

    .gradient-btn {
        padding: 12px 45px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 16px;
        background: #fff;
        color: #23527c;
        border: 2px solid transparent;
        background-image: linear-gradient(#fff, #fff),
                        linear-gradient(90deg, #6a1b9a, #42a5f5);
        background-origin: border-box;
        background-clip: padding-box, border-box;
        transition: 0.3s;
        cursor: pointer;
    }

    .gradient-btn:hover {
        background-image: linear-gradient(#e3f2fd, #e3f2fd),
                        linear-gradient(90deg, #6a1b9a, #42a5f5);
        color: #1a4f7a;
    }

    .captcha-submit {
        display: flex;
        justify-content: flex-start;
        align-items: center; 
        gap: 15rem; 
        margin-top: 20px;
    }

    .divider-contact {
        width: 100%;
        max-width: 900px;
        margin-top: 25px;
        border: 0;
        border-top: 1.4px solid #dadada;
    }

    .location-wrap {
        margin-top: 15px;
        margin-left: 250px;
        max-width: 700px; 
        color: #7d7d7dff;
    }

    .lokasi-title {
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 25px;
        text-align: left;
    }

    .lokasi-item {
        margin-bottom: 30px;
    }

    .lokasi-item h5 {
        font-weight: 600;
        margin-bottom: 8px;
    }

    .lokasi-item p {
        margin: 3px 0;
        font-size: 15px;
        line-height: 1.6;
        color: #444;
    }

    /* --- RESPONSIVE CONTACT PAGE --- */

    @media (max-width: 900px) {

        .hero-layanan-content h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .captcha-submit {
            flex-direction: column;
            align-items: flex-start;
            gap: 20px; /* dulu 15rem jadi wajar di mobile */
        }

        .gradient-btn {
            width: 100%; /* tombol melebar rapi */
            text-align: center;
        }

        .location-wrap {
            margin-left: 40px;
            max-width: 90%;
        }
    }

    @media (max-width: 600px) {

        .container {
            padding: 0 10px;
        }

        .hero-layanan-content h1 {
            font-size: 2rem;
        }

        .captcha-submit {
            align-items: center; 
            text-align: center;
            width: 100%;
        }

        .gradient-btn {
            width: 100%;
        }

        .location-wrap {
            margin-left: 20px;
            margin-right: 20px;
        }
    }

</style>

<section class="hero-layanan-section">
    <img src="{{ asset('images/becak.png') }}" class="hero-layanan-image">

    <div class="hero-layanan-overlay">
        <div class="hero-layanan-content">
            <h1>HUBUNGI KAMI</h1>
        </div>
    </div>
</section>

<div class="container py-5">

    <h3>KIRIM PESAN</h3>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col">
                <label>Nama*</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col">
                <label>Email*</label>
                <input type="email" name="email" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label>Perusahaan/Organisasi</label>
                <input type="text" name="company" class="form-control">
            </div>

            <div class="col">
                <label>Telepon</label>
                <input type="text" name="phone" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Isi Pesan*</label>
            <textarea name="message" class="form-control" rows="5" required placeholder="Isi Pesan*"></textarea>
        </div>

        <div class="captcha-submit">
            <div>
                {!! NoCaptcha::display() !!}
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
            </div>

            <button class="gradient-btn" type="submit">KIRIM PESAN</button>
        </div>

    </form>

    <hr class="divider-contact">

</div>

<section class="location-wrap">
    <h3 class="lokasi-title">LOKASI KAMI</h3>

    <div class="lokasi-item">
        <h5>Kantor Pusat</h5>
        <p>Gedung Ir. H. M. Suseno - JL. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone: (6285) 286754052 - Fax: (6285) 286754052</p>
        <p>Hotline: +6285286754052 / +6285286754052</p>
    </div>

    <div class="lokasi-item">
        <h5>Kantor Cabang</h5>
        <p>Gedung Ir. H. M. Suseno - JL. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone: (6285) 286754052 - Fax: (6285) 286754052</p>
        <p>Hotline: +6285286754052 / +6285286754052</p>
    </div>
</section>



{{-- ✅ Load JS --}}
{!! NoCaptcha::renderJs() !!}


@endsection

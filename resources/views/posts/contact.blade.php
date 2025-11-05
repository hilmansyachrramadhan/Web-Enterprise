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

        {{-- ✅ Google reCAPTCHA --}}
        {!! NoCaptcha::display() !!}
        @if ($errors->has('g-recaptcha-response'))
            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
        @endif

        <div class="massage">
            <button class="gradient-btn" type="submit">KIRIM PESAN</button>
        </div>
    </form>

</div>

{{-- ✅ Load JS --}}
{!! NoCaptcha::renderJs() !!}


@endsection

@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <div class="contact-section">
        <div class="container">
            <h1 class="contact-title">Hubungi Kami</h1>
            <p class="contact-subtitle">Silakan isi form di bawah untuk menghubungi kami.</p>

            @if (session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
                    @error('nama')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="5" required>{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn-submit">Kirim Pesan</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Section utama */
    .contact-section {
        padding: 80px 0;
        background-color: #f9f9f9;
        min-height: 100vh;
    }

    .container {
        width: 90%;
        max-width: 600px;
        margin: 0 auto;
    }

    .contact-title {
        text-align: center;
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .contact-subtitle {
        text-align: center;
        font-size: 16px;
        color: #666;
        margin-bottom: 40px;
    }

    /* Form styling */
    .contact-form {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 6px;
    }

    input,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
        outline: none;
        transition: border 0.3s ease;
    }

    input:focus,
    textarea:focus {
        border-color: #1a73e8;
    }

    .btn-submit {
        width: 100%;
        padding: 12px;
        background-color: #1a73e8;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s ease;
        font-weight: 600;
    }

    .btn-submit:hover {
        background-color: #1257b7;
    }

    .alert-success {
        background: #e6f9ec;
        color: #2e7d32;
        border: 1px solid #b2dfdb;
        padding: 10px 15px;
        border-radius: 6px;
        margin-bottom: 20px;
        text-align: center;
    }

    .error {
        color: #d32f2f;
        font-size: 13px;
    }
</style>
@endpush

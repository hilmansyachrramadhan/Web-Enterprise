<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan halaman form kontak
    public function index()
    {
        return view('posts.contact');
    }

    // Menangani data dari form kontak
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'pesan' => 'required|min:10'
        ]);

        // Di sini kamu bisa menambahkan logika seperti:
        // - menyimpan ke database
        // - mengirim email notifikasi
        // Sementara kita hanya menampilkan pesan sukses

        return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}

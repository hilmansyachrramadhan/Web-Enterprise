<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // ← Tambahkan ini
use Illuminate\Support\Facades\Mail; // ← Tambahkan ini
use App\Mail\ContactMail; // ← Tambahkan ini

class ContactController extends Controller
{
    public function index()
    {
        return view('posts.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'nullable',
            'phone' => 'nullable',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        // Simpan data ke database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Kirim email ke admin
        Mail::to('hilmansyachrramadhan@gmail.com')->send(new ContactMail($request));

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan berhasil dikirim. Terima kasih!');
    }
}

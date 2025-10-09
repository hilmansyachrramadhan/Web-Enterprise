@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Post</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Tambah Post</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ Str::limit($post->content, 50) }}</td>
            <td>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Belum ada post</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

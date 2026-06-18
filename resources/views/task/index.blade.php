@extends('layouts.app')

@section('content')
    <h1>Task Page Tugas Darma</h1>

    <p>ini adalah halaman task yang dibuat untuk tugas 2 Laravel 13</p>
    <p>Nama Task: {{ $namaTask }}</p>

    @if ($status === 'done')
        <span class="text-green-600 font-semibold">Sudah selesai!</span>
    @elseif($status === 'doing')
        <span class="text-yellow-600 font-semibold">Sedang dikerjakan</span>
    @else
        <span class="text-gray-600 font-semibold">Belum dimulai</span>
    @endif

    <p class="mt-4">
        <a href="{{ route('tasks.create') }}"
           class="inline-block px-5 py-1.5 bg-blue-600 text-white rounded-sm text-sm hover:bg-blue-700">
            Tambah Data Baru
        </a>
    </p>
@endsection

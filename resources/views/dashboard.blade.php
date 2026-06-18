@extends('layouts.app')

{{-- 2. Set judul tab browser --}}
@section('title', 'Dashboard')
@section('title', 'task')

{{-- 3. Isi bagian @yield('content') di layout --}}
@section('content')

<h1 class="text-xl font-semibold text-gray-900 mb-5">
    Dashboard TaskFlow
</h1>

<div class="grid grid-cols-3 gap-4">
    <div class='bg-white rounded-xl border border-gray-200 p-5'>
        <p class='text-2xl font-bold text-blue-600'>{{ $stats['total_tasks'] }}</p>
        <p class='text-sm text-gray-500 mt-1'>Total Tugas</p>
    </div>
</div>

@endsection

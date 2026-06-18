@extends('layouts.app')
@section('content')
<h1>Tambah Task Baru</h1>
<body>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div>
            <label for="title">Judul Tugas:</label>
            <input type="text" id="title" name="title" placeholder="Judul tugas" required>
        </div>

        <br>

        <div>
            <label for="status">Status Pengerjaan:</label>
            <select id="status" name="status">
                <option value="pending">Belum dimulai</option>
                <option value="doing">Sedang dikerjakan</option>
                <option value="done">Sudah selesai!</option>
            </select>
        </div>

        <br>

        <button type="submit">Simpan Task</button>
    </form>

</body>
@endsection

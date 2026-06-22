@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-2xl border border-gray-200 p-8 shadow-sm mt-6">

        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">About Us</h1>

        <div class="flex flex-col items-center">
            <figure class="mb-6 text-center">
                <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-blue-500 shadow-md mx-auto">
                    <img src="{{ asset('images/bg.jpeg') }}" alt="Foto Profil" class="w-full h-full object-cover" />
                </div>
                <figcaption class="text-sm text-gray-500 italic mt-2">Foto Profil</figcaption>
            </figure>

            <div class="w-full space-y-4 text-gray-700 max-w-xl bg-gray-50 p-6 rounded-xl border border-gray-100">

                <div class="flex border-b border-gray-200 pb-2">
                    <span class="w-1/4 font-semibold text-gray-600">Nama Lengkap</span>

                    <span class="w-3/4">: Achmad Darma Supriatno, A.Md.Kom</span>
                </div>

                <div class="flex border-b border-gray-200 pb-2">
                    <span class="w-1/4 font-semibold text-gray-600">Usia</span>
                    <span class="w-3/4">: 31 Tahun</span>
                </div>

                <div class="flex border-b border-gray-200 pb-2">
                    <span class="w-1/4 font-semibold text-gray-600">No. HP</span>
                    <span class="w-3/4">: 081299337122</span>
                </div>

                <div class="flex border-b border-gray-200 pb-2">
                    <span class="w-1/4 font-semibold text-gray-600">Kesibukan</span>
                    <span class="w-3/4">: Bekerja sehari-hari</span>
                </div>

                <div class="pt-2">
                    <span class="block font-semibold text-gray-600 mb-1">Alasan Mengikuti Bootcamp:</span>
                    <p class="text-sm bg-blue-50 text-blue-800 p-3 rounded-lg border border-blue-100 leading-relaxed">
                        Ingin membuat aplikasi handal untuk kepegawaian di tempat kerja berbasis Laravel 13.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

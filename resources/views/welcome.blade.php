@extends('layouts.app')

@section('title', 'Beranda - Sistem Pendaftaran Beasiswa')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg shadow-xl p-8 mb-8 text-white">
    <h1 class="text-4xl font-bold mb-4">Selamat Datang di Portal Beasiswa</h1>
    <p class="text-xl mb-6">Raih kesempatan mendapatkan beasiswa untuk mendukung pendidikan Anda</p>
    <a href="{{ route('beasiswa.daftar') }}" 
       class="inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 shadow-md">
        Daftar Sekarang
    </a>
</div>

<!-- Info Jenis Beasiswa -->
<div class="mb-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Jenis Beasiswa yang Tersedia</h2>
    
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Beasiswa Akademik -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl">
            <div class="flex items-center mb-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="ml-4 text-2xl font-bold text-gray-800">Beasiswa Akademik</h3>
            </div>
            
            <p class="text-gray-600 mb-4">
                Beasiswa yang diberikan kepada mahasiswa dengan prestasi akademik yang membanggakan.
            </p>
            
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-semibold text-gray-800 mb-2">Syarat dan Ketentuan:</h4>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>IPK minimal <strong>3.0</strong></span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Mahasiswa aktif semester 1-8</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Upload transkrip nilai/KHS terakhir</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-blue-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Tidak sedang menerima beasiswa lain</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Beasiswa Non-Akademik -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl">
            <div class="flex items-center mb-4">
                <div class="bg-green-100 p-3 rounded-full">
                    <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                    </svg>
                </div>
                <h3 class="ml-4 text-2xl font-bold text-gray-800">Beasiswa Non-Akademik</h3>
            </div>
            
            <p class="text-gray-600 mb-4">
                Beasiswa untuk mahasiswa berprestasi di bidang non-akademik seperti olahraga, seni, dan organisasi.
            </p>
            
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-semibold text-gray-800 mb-2">Syarat dan Ketentuan:</h4>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>IPK minimal <strong>3.0</strong></span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Mahasiswa aktif semester 1-8</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Upload sertifikat prestasi/penghargaan</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 text-green-600 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Aktif dalam kegiatan kemahasiswaan</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-white rounded-lg shadow-md p-8 text-center">
    <h3 class="text-2xl font-bold text-gray-800 mb-4">Sudah Siap Mendaftar?</h3>
    <p class="text-gray-600 mb-6">
        Lengkapi data diri Anda dan upload berkas persyaratan untuk mendaftar beasiswa.
    </p>
    <div class="flex justify-center space-x-4">
        <a href="{{ route('beasiswa.daftar') }}" 
           class="bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-blue-700 shadow-md">
            Daftar Beasiswa
        </a>
        <a href="{{ route('beasiswa.hasil') }}" 
           class="bg-gray-200 text-gray-700 font-semibold px-8 py-3 rounded-lg hover:bg-gray-300 shadow-md">
            Lihat Hasil
        </a>
    </div>
</div>

<!-- Info Tambahan -->
<div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm text-yellow-700">
                <strong>Perhatian:</strong> Pastikan IPK Anda minimal 3.0 untuk dapat mendaftar beasiswa. 
                Sistem akan otomatis mengecek kelayakan Anda berdasarkan IPK yang terdaftar.
            </p>
        </div>
    </div>
</div>
@endsection
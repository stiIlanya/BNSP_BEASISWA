@extends('layouts.app')

@section('title', 'Beranda - Portal Beasiswa')

@section('content')

<div class="mb-8 animate-in">
    <div class="nav-gradient rounded-xl p-10 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full -ml-24 -mb-24"></div>
        <div class="relative max-w-3xl">
            <h1 class="text-4xl font-bold mb-3 leading-tight">Wujudkan Impian Pendidikan Anda</h1>
            <p class="text-lg mb-6 text-white/90">
                Daftarkan diri untuk mendapatkan bantuan biaya pendidikan melalui program beasiswa yang tersedia
            </p>
            <div class="flex gap-3">
                <a href="{{ route('beasiswa.daftar') }}" 
                   class="inline-block bg-white text-[#475088] font-medium px-6 py-2.5 rounded-lg hover:bg-gray-50 transition">
                    Daftar Sekarang
                </a>
                <a href="{{ route('beasiswa.hasil') }}" 
                   class="inline-block bg-white/10 backdrop-blur-sm text-white border border-white/20 font-medium px-6 py-2.5 rounded-lg hover:bg-white/15 transition">
                    Lihat Status
                </a>
            </div>
        </div>
    </div>
</div>

<div class="grid md:grid-cols-4 gap-4 mb-8">
    <div class="card p-5 hover:shadow-sm transition">
        <div class="text-gray-500 text-sm mb-1">Total Program</div>
        <div class="text-2xl font-bold text-gray-900">15+</div>
        <div class="text-xs text-gray-400 mt-1">Beasiswa aktif</div>
    </div>
    <div class="card p-5 hover:shadow-sm transition">
        <div class="text-gray-500 text-sm mb-1">Penerima</div>
        <div class="text-2xl font-bold text-gray-900">1,200+</div>
        <div class="text-xs text-gray-400 mt-1">Mahasiswa</div>
    </div>
    <div class="card p-5 hover:shadow-sm transition">
        <div class="text-gray-500 text-sm mb-1">Total Dana</div>
        <div class="text-2xl font-bold text-gray-900">25M</div>
        <div class="text-xs text-gray-400 mt-1">Tersalurkan</div>
    </div>
    <div class="card p-5 hover:shadow-sm transition">
        <div class="text-gray-500 text-sm mb-1">Mitra</div>
        <div class="text-2xl font-bold text-gray-900">18</div>
        <div class="text-xs text-gray-400 mt-1">Institusi</div>
    </div>
</div>

<div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-900 mb-4">Jenis Beasiswa</h2>
</div>

<div class="grid md:grid-cols-2 gap-6 mb-8">
    <div class="card p-6 hover:shadow-sm transition">
        <div class="flex items-start mb-4">
            <div class="bg-blue-50 p-3 rounded-lg">
                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                </svg>
            </div>
            <div class="ml-4 flex-1">
                <h3 class="font-semibold text-lg text-gray-900 mb-1">Beasiswa Akademik</h3>
                <p class="text-gray-600 text-sm">Untuk mahasiswa dengan prestasi akademik cemerlang</p>
            </div>
        </div>
        
        <div class="bg-gray-50 rounded-lg p-4 mb-3">
            <div class="text-sm font-medium text-gray-700 mb-2">Persyaratan:</div>
            <ul class="space-y-1.5 text-sm text-gray-600">
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>IPK minimal 3.0</span>
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Mahasiswa aktif semester 2-7</span>
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Transkrip nilai terbaru</span>
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Tidak menerima beasiswa lain</span>
                </li>
            </ul>
        </div>

        <div class="text-xs text-gray-500 bg-blue-50 p-3 rounded-lg">
            <span class="font-medium text-gray-700">Benefit:</span> Bantuan UKT + Sertifikat + Mentoring akademik
        </div>
    </div>

    <div class="card p-6 hover:shadow-sm transition">
        <div class="flex items-start mb-4">
            <div class="bg-purple-50 p-3 rounded-lg">
                <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                </svg>
            </div>
            <div class="ml-4 flex-1">
                <h3 class="font-semibold text-lg text-gray-900 mb-1">Beasiswa Non-Akademik</h3>
                <p class="text-gray-600 text-sm">Untuk prestasi olahraga, seni, dan organisasi</p>
            </div>
        </div>
        
        <div class="bg-gray-50 rounded-lg p-4 mb-3">
            <div class="text-sm font-medium text-gray-700 mb-2">Persyaratan:</div>
            <ul class="space-y-1.5 text-sm text-gray-600">
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>IPK minimal 3.0</span>
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Mahasiswa aktif semester 2-7</span>
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Sertifikat prestasi/kejuaraan</span>
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Aktif dalam organisasi kampus</span>
                </li>
            </ul>
        </div>

        <div class="text-xs text-gray-500 bg-purple-50 p-3 rounded-lg">
            <span class="font-medium text-gray-700">Benefit:</span> Bantuan UKT + Pelatihan soft skills + Networking
        </div>
    </div>
</div>

<div class="card p-6 mb-8">
    <h3 class="font-semibold text-lg text-gray-900 mb-4">Mitra Beasiswa</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-gray-50 rounded-lg p-4 text-center">
            <div class="text-xs text-gray-500 mb-1">Pemerintah</div>
            <div class="font-semibold text-gray-900">LPDP</div>
        </div>
        <div class="bg-gray-50 rounded-lg p-4 text-center">
            <div class="text-xs text-gray-500 mb-1">Perbankan</div>
            <div class="font-semibold text-gray-900">BCA</div>
        </div>
        <div class="bg-gray-50 rounded-lg p-4 text-center">
            <div class="text-xs text-gray-500 mb-1">Yayasan</div>
            <div class="font-semibold text-gray-900">Djarum</div>
        </div>
        <div class="bg-gray-50 rounded-lg p-4 text-center">
            <div class="text-xs text-gray-500 mb-1">Bank Sentral</div>
            <div class="font-semibold text-gray-900">Bank Indonesia</div>
        </div>
    </div>
</div>

<div class="card p-6 text-center mb-8">
    <h3 class="text-xl font-bold text-gray-900 mb-2">Siap Mendaftar?</h3>
    <p class="text-gray-600 mb-5 max-w-2xl mx-auto">
        Lengkapi formulir pendaftaran dan upload dokumen persyaratan untuk mulai proses pendaftaran beasiswa
    </p>
    <div class="flex justify-center gap-3">
        <a href="{{ route('beasiswa.daftar') }}" 
           class="btn-primary text-white font-medium px-7 py-2.5 rounded-lg transition">
            Daftar Beasiswa
        </a>
        <a href="{{ route('beasiswa.hasil') }}" 
           class="bg-gray-100 text-gray-700 font-medium px-7 py-2.5 rounded-lg hover:bg-gray-200 transition">
            Cek Status
        </a>
    </div>
</div>

<div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
    <div class="flex items-start">
        <svg class="h-5 w-5 text-yellow-600 mr-3 mt-0.5 " fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
        </svg>
        <div class="text-sm text-gray-700">
            <div class="font-medium mb-1">Informasi Penting</div>
            <div>Pastikan IPK minimal 3.0 untuk dapat mendaftar. Periode pendaftaran: 1 Sept - 30 Nov 2025. Pengumuman: 15 Des 2025.</div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('title', 'Status Pendaftaran')

@section('content')
<div>
    <div class="flex justify-between items-center mb-6 animate-in">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 mb-1">Status Pendaftaran</h1>
            <p class="text-gray-600">Daftar mahasiswa yang telah mendaftar beasiswa</p>
        </div>
        <a href="{{ route('beasiswa.daftar') }}" 
           class="btn-primary text-white font-medium px-5 py-2.5 rounded-lg transition text-sm">
            + Daftar Baru
        </a>
    </div>

    <div class="grid md:grid-cols-4 gap-4 mb-6">
        <div class="card p-5">
            <div class="text-gray-500 text-xs mb-1">Total Pendaftar</div>
            <div class="text-2xl font-bold text-gray-900">{{ $beasiswas->count() }}</div>
        </div>
        <div class="card p-5">
            <div class="text-gray-500 text-xs mb-1">Akademik</div>
            <div class="text-2xl font-bold text-gray-900">{{ $beasiswas->where('pilihan_beasiswa', 'akademik')->count() }}</div>
        </div>
        <div class="card p-5">
            <div class="text-gray-500 text-xs mb-1">Non-Akademik</div>
            <div class="text-2xl font-bold text-gray-900">{{ $beasiswas->where('pilihan_beasiswa', 'non-akademik')->count() }}</div>
        </div>
        <div class="card p-5">
            <div class="text-gray-500 text-xs mb-1">Rata-rata IPK</div>
            <div class="text-2xl font-bold text-gray-900">{{ $beasiswas->count() > 0 ? number_format($beasiswas->avg('ipk'), 2) : '0.00' }}</div>
        </div>
    </div>

    <div class="card overflow-hidden animate-in">
        @if($beasiswas->count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. HP</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Sem</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">IPK</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Beasiswa</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Berkas</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($beasiswas as $index => $beasiswa)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-3 text-sm text-gray-900">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-[#475088] flex items-center justify-center text-white text-xs font-medium">
                                        {{ strtoupper(substr($beasiswa->nama, 0, 1)) }}
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">{{ $beasiswa->nama }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $beasiswa->email }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $beasiswa->nomor_hp }}</td>
                            <td class="px-4 py-3 text-center">
                                <span class="badge bg-blue-50 text-blue-700">{{ $beasiswa->semester }}</span>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <span class="badge {{ $beasiswa->ipk >= 3.5 ? 'bg-green-50 text-green-700' : 'bg-yellow-50 text-yellow-700' }}">
                                    {{ number_format($beasiswa->ipk, 2) }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                @if($beasiswa->pilihan_beasiswa == 'akademik')
                                    <span class="badge bg-green-50 text-green-700">Akademik</span>
                                @else
                                    <span class="badge bg-purple-50 text-purple-700">Non-Akademik</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-center">
                                <a href="{{ asset('uploads/' . $beasiswa->berkas) }}" 
                                   target="_blank"
                                   class="text-[#475088] hover:text-[#3e4670] text-sm font-medium">
                                    Lihat
                                </a>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <span class="badge bg-yellow-50 text-yellow-700">{{ $beasiswa->status_ajuan }}</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-600">
                                <div>{{ $beasiswa->created_at->format('d M Y') }}</div>
                                <div class="text-xs text-gray-400">{{ $beasiswa->created_at->format('H:i') }}</div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-12 px-4">
                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-1">Belum Ada Data</h3>
                <p class="text-gray-500 mb-4">Belum ada mahasiswa yang mendaftar beasiswa</p>
                <a href="{{ route('beasiswa.daftar') }}" 
                   class="btn-primary text-white font-medium px-5 py-2.5 rounded-lg transition inline-block">
                    Daftar Sekarang
                </a>
            </div>
        @endif
    </div>

    @if($beasiswas->count() > 0)
    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex items-start">
            <svg class="h-5 w-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
            </svg>
            <div class="text-sm text-gray-700">
                <div class="font-medium mb-1">Informasi Verifikasi</div>
                <div>Status akan diverifikasi dalam 1-3 hari kerja. Notifikasi dikirim via email.</div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
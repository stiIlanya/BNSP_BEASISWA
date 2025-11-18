@extends('layouts.app')

@section('title', 'Pendaftaran Beasiswa')

@section('content')
<div class="max-w-3xl mx-auto">
    
    <div class="mb-6 animate-in">
        <h1 class="text-2xl font-bold text-gray-900 mb-1">Formulir Pendaftaran Beasiswa</h1>
        <p class="text-gray-600">Isi data dengan lengkap dan benar</p>
    </div>

    <div class="mb-6">
        @if($ipk >= 3.0)
            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <div class="font-medium text-green-800">IPK Memenuhi Syarat</div>
                        <div class="text-sm text-green-700 mt-0.5">IPK Anda: {{ number_format($ipk, 2) }} - Anda dapat melanjutkan pendaftaran</div>
                    </div>
                </div>
            </div>
        @else
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex items-start">
                    <div class="">
                        <svg class="h-5 w-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <div class="font-medium text-red-800">IPK Tidak Memenuhi Syarat</div>
                        <div class="text-sm text-red-700 mt-0.5">IPK Anda: {{ number_format($ipk, 2) }} - Minimal IPK 3.0 untuk mendaftar</div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="card p-6 animate-in">
        <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data" id="formBeasiswa">
            @csrf
            
            <input type="hidden" name="ipk" value="{{ $ipk }}">

            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           name="nama" 
                           value="{{ old('nama') }}"
                           class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg text-sm focus:border-[#475088] transition @error('nama') border-red-500 @enderror"
                           placeholder="Masukkan nama lengkap"
                           required>
                    @error('nama')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" 
                           name="email" 
                           value="{{ old('email') }}"
                           class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg text-sm focus:border-[#475088] transition @error('email') border-red-500 @enderror"
                           placeholder="nama@email.com"
                           required>
                    <p class="mt-1 text-xs text-gray-500">Gunakan email aktif untuk notifikasi</p>
                    @error('email')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">
                        Nomor HP <span class="text-red-500">*</span>
                    </label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-l-lg">
                            +62
                        </span>
                        <input type="text" 
                               id="nomor_hp"
                               name="nomor_hp" 
                               value="{{ old('nomor_hp') }}"
                               class="flex-1 px-3.5 py-2.5 border border-gray-300 rounded-r-lg text-sm focus:border-[#475088] transition @error('nomor_hp') border-red-500 @enderror"
                               placeholder="8123456789"
                               pattern="[0-9]*"
                               required>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Contoh: 8123456789 (tanpa 0 di depan)</p>
                    @error('nomor_hp')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">
                            Semester <span class="text-red-500">*</span>
                        </label>
                        <select name="semester" 
                                class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg text-sm focus:border-[#475088] transition @error('semester') border-red-500 @enderror"
                                required>
                            <option value="">Pilih semester</option>
                            @for($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>Semester {{ $i }}</option>
                            @endfor
                        </select>
                        @error('semester')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">
                            IPK
                        </label>
                        <input type="text" 
                               value="{{ number_format($ipk, 2) }}" 
                               class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg bg-gray-50 text-sm cursor-not-allowed"
                               readonly>
                        <p class="mt-1 text-xs text-gray-500">Otomatis dari sistem</p>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">
                        Pilihan Beasiswa <span class="text-red-500">*</span>
                    </label>
                    <select id="pilihan_beasiswa"
                            name="pilihan_beasiswa" 
                            class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg text-sm focus:border-[#475088] transition @error('pilihan_beasiswa') border-red-500 @enderror"
                            {{ $ipk < 3.0 ? 'disabled' : '' }}
                            required>
                        <option value="">Pilih jenis beasiswa</option>
                        <option value="akademik" {{ old('pilihan_beasiswa') == 'akademik' ? 'selected' : '' }}>Beasiswa Akademik</option>
                        <option value="non-akademik" {{ old('pilihan_beasiswa') == 'non-akademik' ? 'selected' : '' }}>Beasiswa Non-Akademik</option>
                    </select>
                    @if($ipk < 3.0)
                        <p class="mt-1 text-xs text-gray-500 italic">Tidak tersedia karena IPK tidak memenuhi syarat</p>
                    @endif
                    @error('pilihan_beasiswa')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">
                        Upload Berkas <span class="text-red-500">*</span>
                    </label>
                    <input type="file" 
                           id="berkas"
                           name="berkas" 
                           accept=".pdf,.jpg,.jpeg,.png,.zip"
                           class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg text-sm focus:border-[#475088] transition file:mr-3 file:py-1.5 file:px-3 file:rounded file:border-0 file:text-sm file:bg-[#475088] file:text-white hover:file:bg-[#3e4670] @error('berkas') border-red-500 @enderror"
                           {{ $ipk < 3.0 ? 'disabled' : '' }}
                           required>
                    <p class="mt-1 text-xs text-gray-500">Format: PDF, JPG, PNG, ZIP. Maksimal 2MB</p>
                    @if($ipk < 3.0)
                        <p class="mt-1 text-xs text-gray-500 italic">Tidak tersedia karena IPK tidak memenuhi syarat</p>
                    @endif
                    @error('berkas')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="bg-blue-50 border border-blue-200 rounded-lg p-3.5">
                    <div class="text-sm text-gray-700">
                        <div class="font-medium mb-1">Dokumen yang perlu disiapkan:</div>
                        <ul class="text-xs space-y-0.5 ml-4">
                            <li>• Transkrip nilai terakhir</li>
                            <li>• Sertifikat prestasi (jika ada)</li>
                            <li>• Kartu mahasiswa</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-6 mt-6 border-t">
                <a href="{{ route('beasiswa.index') }}" 
                   class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                    ← Kembali
                </a>
                <button type="submit" 
                        class="btn-primary text-white font-medium px-6 py-2.5 rounded-lg transition disabled:opacity-50 disabled:cursor-not-allowed"
                        {{ $ipk < 3.0 ? 'disabled' : '' }}
                        id="btnSubmit">
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ipk = {{ $ipk }};
        const nomorHp = document.getElementById('nomor_hp');
        const btnSubmit = document.getElementById('btnSubmit');
        const form = document.getElementById('formBeasiswa');
        
        nomorHp.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        
        form.addEventListener('submit', function(e) {
            if (ipk < 3.0) {
                e.preventDefault();
                alert('IPK tidak memenuhi syarat minimal 3.0');
                return false;
            }
            
            if (nomorHp.value.length < 10) {
                e.preventDefault();
                alert('Nomor HP minimal 10 digit');
                nomorHp.focus();
                return false;
            }
            
            if (!confirm('Pastikan semua data sudah benar. Lanjutkan?')) {
                e.preventDefault();
                return false;
            }
            
            btnSubmit.disabled = true;
            btnSubmit.innerHTML = 'Memproses...';
        });
    });
</script>
@endpush
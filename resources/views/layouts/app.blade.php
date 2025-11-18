<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Pendaftaran Beasiswa Online">
    <title>@yield('title', 'Portal Beasiswa')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, system-ui, sans-serif;
        }
        
        body {
            background: #fafbfc;
        }
        
        .nav-gradient {
            background: linear-gradient(120deg, #475088 0%, #2d3561 100%);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #475088 0%, #363d6e 100%);
            box-shadow: 0 2px 8px rgba(71, 80, 136, 0.25);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #3e4670 0%, #2d3561 100%);
            box-shadow: 0 4px 12px rgba(71, 80, 136, 0.35);
        }
        
        .card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }
        
        .card:hover {
            border-color: #d1d5db;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #475088;
            box-shadow: 0 0 0 3px rgba(71, 80, 136, 0.1);
        }
        
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .animate-in {
            animation: slideUp 0.5s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <nav class="nav-gradient border-b border-white/10 sticky top-0 z-50 backdrop-blur-sm bg-opacity-95">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="bg-white/90 p-2 rounded-lg">
                        <svg class="h-7 w-7 text-[#475088]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white font-semibold text-lg">Portal Beasiswa</div>
                        <div class="text-white/70 text-xs">Universitas Nusantara</div>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('beasiswa.index') }}" 
                       class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs('beasiswa.index') ? 'bg-white/15' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('beasiswa.daftar') }}" 
                       class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs('beasiswa.daftar') ? 'bg-white/15' : '' }}">
                        Pendaftaran
                    </a>
                    <a href="{{ route('beasiswa.hasil') }}" 
                       class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs('beasiswa.hasil') ? 'bg-white/15' : '' }}">
                        Hasil
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        @if(session('success'))
            <div class="mb-5 bg-green-50 border border-green-200 text-green-800 px-5 py-3.5 rounded-lg animate-in" role="alert">
                <div class="flex items-start">
                    <svg class="h-5 w-5 mr-2.5 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <div class="font-medium">Berhasil</div>
                        <div class="text-sm mt-0.5">{{ session('success') }}</div>
                    </div>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-5 bg-red-50 border border-red-200 text-red-800 px-5 py-3.5 rounded-lg animate-in" role="alert">
                <div class="flex items-start">
                    <svg class="h-5 w-5 mr-2.5 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <div class="font-medium">Error</div>
                        <div class="text-sm mt-0.5">{{ session('error') }}</div>
                    </div>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="mb-5 bg-red-50 border border-red-200 text-red-800 px-5 py-3.5 rounded-lg animate-in">
                <div class="flex items-start">
                    <svg class="h-5 w-5 mr-2.5 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    <div class="flex-1">
                        <div class="font-medium mb-1">Terdapat kesalahan:</div>
                        <ul class="text-sm space-y-0.5">
                            @foreach($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="nav-gradient text-white mt-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid md:grid-cols-3 gap-8 mb-6">
                <div>
                    <h3 class="font-semibold mb-3 text-sm">Tentang</h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Portal beasiswa untuk membantu mahasiswa meraih pendidikan berkualitas.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-3 text-sm">Menu</h3>
                    <ul class="space-y-1.5 text-sm">
                        <li><a href="{{ route('beasiswa.index') }}" class="text-white/70 hover:text-white">Beranda</a></li>
                        <li><a href="{{ route('beasiswa.daftar') }}" class="text-white/70 hover:text-white">Pendaftaran</a></li>
                        <li><a href="{{ route('beasiswa.hasil') }}" class="text-white/70 hover:text-white">Status</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-3 text-sm">Kontak</h3>
                    <ul class="space-y-1.5 text-sm text-white/70">
                        <li>beasiswa@university.ac.id</li>
                        <li>(021) 1234-5678</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-5 text-center">
                <p class="text-white/60 text-sm">&copy; 2024 Portal Beasiswa. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
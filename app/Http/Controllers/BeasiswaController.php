<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BeasiswaController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    
    public function daftar()
    {
        
        $ipk = 3.4; 
      
        
        return view('daftar', compact('ipk'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'nomor_hp' => 'required|numeric|digits_between:10,15',
                'semester' => 'required|integer|min:1|max:8',
                'ipk' => 'required|numeric|min:3.0|max:4.0',
                'pilihan_beasiswa' => 'required|in:akademik,non-akademik',
                'berkas' => 'required|file|mimes:pdf,jpg,jpeg,png,zip|max:2048'
            ], [
                // Custom error messages
                'nama.required' => 'Nama wajib diisi',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'nomor_hp.required' => 'Nomor HP wajib diisi',
                'nomor_hp.numeric' => 'Nomor HP harus berupa angka',
                'semester.required' => 'Semester wajib dipilih',
                'semester.min' => 'Semester minimal 1',
                'semester.max' => 'Semester maksimal 8',
                'ipk.min' => 'IPK minimal 3.0 untuk mendaftar beasiswa',
                'pilihan_beasiswa.required' => 'Pilihan beasiswa wajib dipilih',
                'berkas.required' => 'Berkas syarat wajib diupload',
                'berkas.mimes' => 'Format berkas harus PDF, JPG, JPEG, PNG, atau ZIP',
                'berkas.max' => 'Ukuran berkas maksimal 2MB'
            ]);

            
            if ($request->hasFile('berkas')) {
                $file = $request->file('berkas');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename);
                $validated['berkas'] = $filename;
            }

            
            $validated['status_ajuan'] = 'belum di verifikasi';

            
            Beasiswa::create($validated);

            
            return redirect()->route('beasiswa.hasil')
                ->with('success', 'Pendaftaran beasiswa berhasil! Status: Belum di verifikasi');
                
        } catch (\Exception $e) {
           
            return back()
                ->withInput()
                ->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * 
     * @return \Illuminate\View\View
     */
    public function hasil()
    {
       
        $beasiswas = Beasiswa::latest()->get();
        
        return view('hasil', compact('beasiswas'));
    }
}
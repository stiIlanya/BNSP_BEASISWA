<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Beasiswa extends Model
{
    use HasFactory;

    
    protected $table = 'beasiswas';

    
    protected $fillable = [
        'nama',
        'email',
        'nomor_hp',
        'semester',
        'ipk',
        'pilihan_beasiswa',
        'berkas',
        'status_ajuan'
    ];

   
    protected $casts = [
        'semester' => 'integer',
        'ipk' => 'decimal:2',
    ];
}
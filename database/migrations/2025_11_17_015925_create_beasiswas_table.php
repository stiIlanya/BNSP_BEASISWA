<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_hp', 15);
            $table->integer('semester');
            $table->decimal('ipk', 3, 2); 
            $table->enum('pilihan_beasiswa', ['akademik', 'non-akademik']);
            $table->string('berkas'); 
            $table->string('status_ajuan')->default('belum di verifikasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
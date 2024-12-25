<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('komiks', function (Blueprint $table) {
            $table->id('id_komik');
            $table->string('judul');
            $table->string('penulis');
            $table->string('kategori');
            $table->integer('thn_terbit');
            $table->text('sinopsis');
            $table->decimal('harga');
            $table->integer('stok');
            $table->string('feature_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komiks');
    }
};

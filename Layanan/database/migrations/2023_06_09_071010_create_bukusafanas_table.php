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
        Schema::create('bukusafanas', function (Blueprint $table) {
            $table->id();
            $table->IDBuku();
            $table->Judul();
            $table->Penulis();
            $table->Penerbit();
            $table->TahunTerbit();
            $table->JumlahStok();
            $table->Dendabuku();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukusafanas');
    }
};

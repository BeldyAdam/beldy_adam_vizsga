<?php

use App\Models\szavak;
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
        Schema::create('szavak', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->constrained('tema');
            $table->timestamps();
        });

        szavak::create(['angol' => 'hello', 'magyar' => 'helló', 'temaId' => 1]);
        szavak::create(['angol' => 'goodbye', 'magyar' => 'viszlát', 'temaId' => 1]);
        szavak::create(['angol' => 'water', 'magyar' => 'víz', 'temaId' => 2]);
        szavak::create(['angol' => 'food', 'magyar' => 'étel', 'temaId' => 2]);
        szavak::create(['angol' => 'travel', 'magyar' => 'utazás', 'temaId' => 3]);
        szavak::create(['angol' => 'fun', 'magyar' => 'szórakozás', 'temaId' => 4]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavak');
    }
};

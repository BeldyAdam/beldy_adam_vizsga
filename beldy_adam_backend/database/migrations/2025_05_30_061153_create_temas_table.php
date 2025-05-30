<?php

use App\Models\tema;
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
        Schema::create('tema', function (Blueprint $table) {
            $table->id();
            $table->string('temanev');
            $table->timestamps();
        });

        tema::create(['temanev' => 'Általános']);
        tema::create(['temanev' => 'Étel és ital']);
        tema::create(['temanev' => 'Utazás']);
        tema::create(['temanev' => 'Szórakozás']);
        tema::create(['temanev' => 'Munka']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tema');
    }
};

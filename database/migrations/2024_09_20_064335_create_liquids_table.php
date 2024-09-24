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
        Schema::create('liquids', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('pg_vg_ratio', 10);
            $table->integer('volume');
            $table->string('flavor', 191);
            $table->decimal('price', 8, 2)->nullable(0);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liquids');
    }
};

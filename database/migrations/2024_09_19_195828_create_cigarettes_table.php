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
        Schema::create('cigarettes', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('strength', 50);
            $table->integer('puffs');
            $table->string('flavor', 191);
            $table->decimal('price', 8, 2);
            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cigarettes');
    }
};

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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone',  20);
            $table->string('address',  50);
            $table->string('city',  50);
            $table->string('post_office', 191);
            $table->string('details', 191)->nullable();
            $table->float('total');
            $table->string('payment_method', 50);
            $table->json('products');
            $table->string('status')->default('in processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

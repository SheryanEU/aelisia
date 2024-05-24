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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid("user_id")
                ->constrained('user')
                ->cascadeOnDelete();
            $table->string('street');
            $table->string('number');
            $table->string('character');
            $table->string('addition');
            $table->string('postal_code');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};

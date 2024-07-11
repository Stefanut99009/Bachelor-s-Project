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
        Schema::create('tiktoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_username', 255);
            $table->string('user_image', 255);
            $table->text('text');
            $table->string('video', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiktoks');
    }
};

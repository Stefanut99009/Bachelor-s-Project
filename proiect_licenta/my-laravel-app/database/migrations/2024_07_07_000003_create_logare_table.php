<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Tests\Integration\Database\EloquentBelongsToManyTest\TagStringPrimaryKey;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logare', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('image', 255)->nullable();
            $table->bigInteger('lvl')->nullable();
            $table->string('username', 255)->nullable()->unique();
            $table->bigInteger('experience')->nullable();
            $table->string('background_image', 255)->nullable();
            $table->text('describe_yourself')->nullable();
            $table->string('email', 900)->unique();
            $table->string('password', 1000);
            $table->date('date');
            $table->text('gender');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logare');
    }
};

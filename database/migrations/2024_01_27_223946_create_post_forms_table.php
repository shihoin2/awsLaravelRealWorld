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
        Schema::create('post_forms', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 300);
            // $table->foreignId('article_id')->nullable()->default(1);
            // $table->foreignId('user_id')->nullable()->default(1);
            // $table->foreignId('article_id')->references('id')->on('conduits');
            $table->unsignedBigInteger('article_id');
            // $table->unsignedBigInteger('article_id')->references('id')->on('conduits');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_forms');
    }
};

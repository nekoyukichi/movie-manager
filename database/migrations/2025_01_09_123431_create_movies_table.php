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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->text('title');             // 映画タイトル
            $table->text('image_url');         // 画像URL
            $table->integer('published_year')->nullable();   // 公開年
            $table->text('description')->nullable(); // 概要
            $table->boolean('is_showing')->default(false);//上映中かどうか
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};

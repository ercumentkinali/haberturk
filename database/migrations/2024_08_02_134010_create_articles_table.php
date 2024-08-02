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
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // ID sütunu, otomatik olarak primary key olarak ayarlanır
            $table->string('title'); // Başlık sütunu
            $table->text('description'); // Açıklama sütunu
            $table->longText('content'); // İçerik sütunu
            $table->string('image_url')->nullable(); // Resim URL sütunu, boş bırakılabilir
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

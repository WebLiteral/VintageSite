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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('file_url')->nullable();
            $table->text('description')->nullable();
            $table->date('creation_date')->nullable();
            $table->string('medium')->nullable();
            $table->string('dimensions')->nullable();  
            $table->boolean('isvisible')->default(true);  
            $table->boolean('isforsale')->default(true);  
            $table->boolean('issensitive')->default(false);
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};

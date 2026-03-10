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
    Schema::create('courses', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('course_key')->unique();
        $table->string('title');
        $table->string('cover_image');
        $table->text('content');
        
        // Foreign Key to the Kits table
        $table->unsignedBigInteger('id_kit');
        $table->foreign('id_kit')->references('id')->on('kits');
        
        $table->timestamps(); // Adds created_at and updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

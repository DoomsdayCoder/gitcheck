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
        //Create table library
        Schema::create('library', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->string('cover_image')->nullable();
            $table->string('name');
            $table->text('tags')->nullable();
            $table->string('link')->nullable();
            $table->string('revised')->nullable();
            $table->string('bookmark')->nullable();
            $table->longText('review')->nullable();
            $table->string('manga_status');
            $table->string('reading_status');
            $table->timestampsTz($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Drop table library
        Schema::dropIfExists('library');
    }
};

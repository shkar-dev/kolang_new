<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('writer_id')->constrained('staff')->onDelete('restrict');
            $table->foreignId('translator_id')->nullable()->constrained('staff')->onDelete('restrict');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('restrict');
            $table->text('content');
            $table->dateTime('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('description')->nullable();
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

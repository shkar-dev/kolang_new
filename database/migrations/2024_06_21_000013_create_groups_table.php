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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreignId('course_id')->constrained('courses')->onDelete('restrict');
            $table->foreignId('lecturer_id')->constrained('members')->onDelete('restrict');
            $table->foreignId('supervisor_id')->constrained('members')->onDelete('restrict');
            $table->decimal('price', 12, 2)->default(0);
            $table->json('lesson_structure')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};

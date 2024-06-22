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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['paticipant', 'lecturer']);
            $table->date('date_of_birth')->nullable();
            $table->string('mobile_1', 16);
            $table->string('mobile_2', 16)->nullable();
            $table->string('mobile_3', 16)->nullable();
            $table->foreignId('academic_level_id')->constrained('academic_levels');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('account_id')->constrained('accounts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

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
        Schema::create('role_authorities', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('roles')->onDelete('restrict');
            $table->foreignId('authority_id')->constrained('authorities')->onDelete('restrict');
            $table->timestamps();
            $table->primary(['role_id', 'authority_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_authorities');
    }
};

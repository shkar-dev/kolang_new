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
        Schema::create('member_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members')->onDelete('restrict');
            $table->foreignId('document_type_id')->constrained('document_types');
            $table->string('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_documents');
    }
};

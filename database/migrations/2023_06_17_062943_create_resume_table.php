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
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascacadeOnDelete()
                ->cascacadeOnUpdate();
            $table->string('title');
            $table->string('deskription');
            $table->string('date')->nullable();
            $table->string('instansi')->nullable();
            $table->enum('type', ['education', 'experience']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume');
    }
};

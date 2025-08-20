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
        Schema::create('mosques', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('google_map_url')->nullable();
            $table->date('establist_year')->nullable();
            $table->integer('total_commitee_members')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('post')->nullable();
            $table->string('address')->nullable();
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mosques');
    }
};

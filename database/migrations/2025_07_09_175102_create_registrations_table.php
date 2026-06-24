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
        Schema::create('registrations', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('email');
        $table->string('afiliasi');
        $table->string('telepon');
        $table->string('kebutuhan');
        $table->text('deskripsi')->nullable();
        $table->timestamps();
        $table->string('status')->default('pending');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
        Schema::table('registrations', function (Blueprint $table) {
        $table->dropColumn('status');
    });
    }
};

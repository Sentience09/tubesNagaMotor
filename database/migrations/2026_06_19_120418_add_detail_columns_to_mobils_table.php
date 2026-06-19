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
    Schema::table('mobils', function (Blueprint $table) {
        $table->integer('tahun')->nullable();
        $table->string('tenaga_hp')->nullable();
        $table->string('mesin')->nullable();
        $table->string('torsi')->nullable();
        $table->string('transmisi')->nullable();
        $table->string('akselerasi')->nullable();
    });
}

public function down(): void
{
    Schema::table('mobils', function (Blueprint $table) {
        $table->dropColumn(['tahun','tenaga_hp','mesin','torsi','transmisi','akselerasi']);
    });
}
};

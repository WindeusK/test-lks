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
        Schema::create('society', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('born_date');
            $table->string('gender');
            $table->string('address');
            $table->string('token');
            $table->string('regional_id');
            $table->string('regional_province');
            $table->string('regional_district');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('society');
    }
};

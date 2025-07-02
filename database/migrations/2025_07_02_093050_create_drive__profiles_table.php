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
        Schema::create('drive__profiles', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('driver_id')->unique();
            $table->name();
            $table->email()->unique();
            $table->gender();
            $table->city();
            $table->birth_date();
            $table->national_ID()->unique();
            $table->documents();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drive__profiles');
    }
};

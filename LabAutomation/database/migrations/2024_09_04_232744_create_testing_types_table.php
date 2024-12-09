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
        Schema::create('testing_types', function (Blueprint $table) {
            $table-> engine = "innoDB";
            $table->id();
            $table->string('TestingTypes',50);
            $table->string('Description', 1000);
            $table->string('TestingTypeImages',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testing_types');
    }
};

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
        Schema::create('testing_details', function (Blueprint $table) {
            $table->id();
            $table->string('trackingid');
            $table->unsignedInteger('userid');
            $table->unsignedInteger('productid');
            $table->unsignedInteger('testingtypeid');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('productid')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('testingtypeid')->references('id')->on('testing_types')->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testing_details');
    }
};

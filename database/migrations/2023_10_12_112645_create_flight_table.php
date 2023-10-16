<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flight', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('from_country_id');
            $table->unsignedBigInteger('to_country_id');
            $table->dateTime('datetime');
            $table->unsignedBigInteger('airplane_id');

            $table->foreign('from_country_id')->references('id')->on('country')->onDelete('cascade');
            $table->foreign('to_country_id')->references('id')->on('country')->onDelete('cascade');
            $table->foreign('airplane_id')->references('id')->on('airplane')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight');
    }
};

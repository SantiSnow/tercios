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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->bigInteger('price');
            $table->string('currency');
            $table->string('address');
            $table->string('zip_code')->nullable();
            $table->string('operation');
            $table->longText('description');
            $table->integer('bathrooms')->nullable();
            $table->integer('rooms')->nullable();
            $table->float('square_meters');
            $table->integer('times_visited')->default(0);
            $table->boolean('outstanding')->default(false);
            $table->text('extra_information')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->bigInteger('type_id');
            $table->bigInteger('city_id');
            $table->bigInteger('estate_id');
            $table->string('tokko_id')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

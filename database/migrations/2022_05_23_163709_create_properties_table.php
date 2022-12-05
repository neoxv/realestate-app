<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->string('name');
            $table->string('price');
            $table->string('address');
            $table->string('city');
            $table->string('subcity')->nullable();
            $table->text('description',1500);
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('area');
            $table->integer('closing_price')->nullable();
            $table->integer('profit')->nullable();
            $table->boolean('is_brokered')->default(false);
            $table->boolean('status')->default(true);
            $table->enum('type', ['house', 'land', 'apartment', 'warehouse', 'building', 'shop','hotel/resort'])->default('house');
            $table->foreignId('owner_id')->constrained();
            $table->boolean('is_featured')->default(false);
            $table->dateTime('feature_from')->nullable();
            $table->dateTime('feature_to')->nullable();
            $table->dateTime('closing_date')->nullable();
            $table->boolean('is_rental')->default(false);
            $table->boolean('is_negotiable')->default(false);
            $table->string('amenities')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};

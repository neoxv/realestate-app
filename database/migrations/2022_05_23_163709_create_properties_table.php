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
            $table->string('name');
            $table->string('price');
            $table->string('address');
            $table->string('city');
            $table->string('subCity')->nullable();
            $table->string('description');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('area');
            $table->integer('closing_price')->nullable();
            $table->boolean('is_brokered')->default(false);
            $table->boolean('status')->default(true);
            $table->enum('type', ['house', 'land', 'apartment', 'warehouse', 'building', 'shop'])->default('house');
            $table->foreignId('owner_id')->constrained();
            $table->boolean('is_featured')->default(false);
            $table->dateTime('feature_from')->nullable();
            $table->dateTime('feature_to')->nullable();
            $table->boolean('is_rental')->default(false);
            $table->boolean('is_negotiable')->default(false);
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

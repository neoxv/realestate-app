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
        // Schema::table('properties', function (Blueprint $table) {
        //     $table->enum('type', ['house', 'land', 'apartment', 'warehouse/factory', 'building', 'shop', 'hotel/resort'])->default('house')->change();
        // });
        $options = implode("','", ['house', 'land', 'apartment', 'warehouse/factory', 'building', 'shop', 'hotel/resort']);
        $default ='house';
        $raw_sql = "ALTER TABLE properties
                    MODIFY COLUMN type ENUM('{$options}')
                    DEFAULT '{$default}' NOT NULL";
        DB::statement($raw_sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};

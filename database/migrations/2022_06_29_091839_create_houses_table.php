<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 12);
            $table->string('address', 100);
            $table->string('postal_code', 10);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->unsignedSmallInteger('square_meters');
            $table->unsignedTinyInteger('rooms');
            $table->unsignedTinyInteger('bathrooms');
            $table->string('type', 50);
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->boolean('is_available')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('houses');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->set('type', ['individual', 'group', 'company', 'government'])->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('alternative_spellings')->nullable();
            $table->string('aliases')->nullable();
            $table->string('title')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->boolean('deceased')->nullable();
            $table->string('residences')->nullable();
            $table->string('passports')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('positions')->nullable();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('lists')->nullable();
            $table->string('sources')->nullable();
            $table->boolean('PEP')->nullable();
            $table->boolean('IEI')->nullable();
            $table->boolean('SOI')->nullable();
            $table->boolean('SAN')->nullable();
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
        Schema::dropIfExists('entities');
    }
}

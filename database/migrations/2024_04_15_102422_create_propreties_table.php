<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->string('address');
            $table->integer('zipCode');
            $table->enum('status', ['high price', 'low price']); 
            $table->string('area');
            $table->integer('nbr_of_bedroom');
            $table->integer('nbr_of_bathroom');
            $table->integer('nbr_of_garage');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
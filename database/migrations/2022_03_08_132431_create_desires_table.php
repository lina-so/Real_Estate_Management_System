<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desires', function (Blueprint $table) {
            $table->bigIncrements('desire_id');
            $table->string('location');
            $table->string('city');
            $table->integer('floor');
            $table->integer('area');
            $table->double('price');
            $table->integer('number_of_rooms');
            $table->integer('number_of_path_rooms');
            $table->enum('state' , ["for_sale" , "for_rent" ])->default('for_sale');
            $table->enum('type' , ["tabo" , "court" ])->default('tabo');
            $table->enum('property_type', ["villa" , "flat","land","محل تجاري" ])->default('flat');
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
        Schema::dropIfExists('desires');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');
            $table->string('number_reservation')->nullable();
            $table->string('instagram');
            $table->string('website')->nullable();
            $table->string('group_by')->nullable();
            $table->string('type_of_lodging');
            $table->string('hotel_description');
            $table->string('recomendation_for');
            $table->integer('total_rooms');
            $table->text('type_rooms');
            $table->string('range_price');
            $table->text('public_facilities_room')->nullable();
            $table->text('public_facilities_hotel')->nullable();
            $table->string('nearest_interesting_location')->nullable();
            $table->string('awards_ever_achieved')->nullable();
            $table->string('identity');
            $table->longText('images');
            $table->string('contact_person');
            $table->string('position');
            $table->string('no_phone');
            $table->string('email');
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
        Schema::dropIfExists('directory_hotels');
    }
}

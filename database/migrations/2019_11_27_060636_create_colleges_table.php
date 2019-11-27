<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->bigIncrements('clg_id');
            $table->string('clg_name',200);
            $table->string('clg_type',50);
            $table->string('clg_address',200);
            $table->string('clg_telephone',10);
            $table->string('clg_email',100);
            $table->string('clg_website',100);
            $table->boolean('deleted');
            $table->string('user_data',50);
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
        Schema::dropIfExists('colleges');
    }
}

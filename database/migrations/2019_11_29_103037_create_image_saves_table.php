<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_saves', function (Blueprint $table) {
            $table->bigIncrements('img_id');
            $table->string('img_type',10);
            $table->date('img_date');
            $table->string('img_url',100);
            $table->integer('ref_no');
            $table->string('extension',6);
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
        Schema::dropIfExists('image_saves');
    }
}

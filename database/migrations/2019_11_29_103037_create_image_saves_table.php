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
            $table->string('img_url',255);
            $table->boolean('deleted');
            $table->timestamps();
        });
        Schema::table('image_saves', function (Blueprint $table) {
            $table->unsignedBigInteger('stu_id');
        
            $table->foreign('stu_id')->references('stu_id')->on('students')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('image_saves', function (Blueprint $table) {
            $table->unsignedBigInteger('clg_id');
        
            $table->foreign('clg_id')->references('clg_id')->on('colleges')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('image_saves', function (Blueprint $table) {
            $table->unsignedBigInteger('cos_id');
        
            $table->foreign('cos_id')->references('cos_id')->on('courses')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('image_saves', function (Blueprint $table) {
            $table->unsignedBigInteger('spc_id');
        
            $table->foreign('spc_id')->references('spc_id')->on('degree_specials')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
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

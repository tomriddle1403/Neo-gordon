<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('content');
            $table->text('metadata');
            $table->timestamps();
           /* $table->string('image', 255);
            $table->string('image2', 255);
            $table->string('image3', 255);
            $table->string('image4', 255);
            $table->string('image5', 255);
           
            $table->tinyinteger('flag_text');
            $table->tinyinteger('flag_logo_nav');*/
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}

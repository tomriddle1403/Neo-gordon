<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoreColsForPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->boolean('text_background_enabled')->default(false)->after('content');
            $table->boolean('logo_background_enabled')->default(false)->after('text_background_enabled');
            $table->text('images')->nullable()->after('logo_background_enabled');
            $table->string('background_colour')->default('rgb(0, 0, 0, .6)')->after('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'text_background_enabled',
                'logo_background_enabled',
                'images',
                'background_colour',
            ]);
        });
    }
}

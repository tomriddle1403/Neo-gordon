<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoreColsForProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->boolean('text_background_enabled')->default(false)->after('sort_order');
            $table->boolean('logo_background_enabled')->default(false)->after('text_background_enabled');
            $table->string('background_colour')->default('rgb(0, 0, 0, .6)')->after('logo_background_enabled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'text_background_enabled',
                'logo_background_enabled',
                'background_colour',
            ]);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('voyager_themes', 'themes');
        Schema::rename('voyager_theme_options', 'theme_options');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('themes', 'voyager_themes');
        Schema::rename('theme_options', 'voyager_theme_options');
    }
};

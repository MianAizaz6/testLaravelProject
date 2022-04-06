<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('pcsir_news', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('news_title');
            $table->string('news_description');
            $table->date('news_postdate');
            $table->date('news_lastdate');
            $table->mediumText('news_file');
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
        Schema::dropIfExists('pcsir_news');
    }
};

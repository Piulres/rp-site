<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1532531835ClientCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('client_currencies')) {
            Schema::create('client_currencies', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('code');
                $table->tinyInteger('main_currency')->nullable()->default('0');
                
                $table->timestamps();
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_currencies');
    }
}

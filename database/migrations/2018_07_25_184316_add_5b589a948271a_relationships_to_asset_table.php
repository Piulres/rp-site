<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b589a948271aRelationshipsToAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function(Blueprint $table) {
            if (!Schema::hasColumn('assets', 'category_id')) {
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', '188464_5b58941e07edd')->references('id')->on('assets_categories')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '188464_5b58941e1d027')->references('id')->on('assets_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '188464_5b58941e30c46')->references('id')->on('assets_locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets', 'assigned_user_id')) {
                $table->integer('assigned_user_id')->unsigned()->nullable();
                $table->foreign('assigned_user_id', '188464_5b58941e4dfc5')->references('id')->on('users')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function(Blueprint $table) {
            
        });
    }
}

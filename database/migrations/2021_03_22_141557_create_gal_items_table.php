<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gal_items', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('gal_id')->unsigned();
            $table->foreign('gal_id')->references('id')->on('gals')->onDelete('restrict');

            $table->bigInteger('application_version_id')->unsigned();
            $table->foreign('application_version_id')->references('id')->on('application_versions')->onDelete('restrict');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gal_items');
    }
}

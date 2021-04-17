<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gal_applications', function (Blueprint $table) {
            $table->bigInteger('gal_id')->unsigned();
            $table->foreign('gal_id')->references('id')->on('gals')->onDelete('restrict');

            $table->bigInteger('application_id')->unsigned();
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('restrict');

            $table->primary(['gal_id','application_id']);

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
        Schema::dropIfExists('gal_applications');
    }
}

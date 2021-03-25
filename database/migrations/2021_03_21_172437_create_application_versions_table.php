<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_versions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('application_id')->unsigned();
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('restrict');

            $table->bigInteger('platform_id')->unsigned();
            $table->foreign('platform_id')->references('id')->on('application_platforms')->onDelete('restrict');

            $table->string('version');
            $table->date('release_date')->nullable();
            $table->enum('arch',['x86','x64',''])->default('');
            $table->string('download_link');
            $table->integer('downloads')->unsigned()->default(0);
            $table->string('silent_install_args');

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
        Schema::dropIfExists('application_versions');
    }
}

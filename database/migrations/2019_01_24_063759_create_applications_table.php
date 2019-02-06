<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Appcategory_id')->unsigned();
            $table->foreign('Appcategory_id')->references('id')->on('application_caterories');
            $table->string('platform');
            $table->string('name');
            $table->float('Version');
            $table->string('title');
            $table->text('message');
            $table->string('link');
            $table->string('email');
            $table->text('format');
            $table->text('contact_format');
            $table->string('devloper_site');
            $table->string('devloper_name');
            $table->string('devloper_apps');
            $table->string('generated_app');
            $table->string('icon');
            $table->string('force_update');
            $table->string('only_banner');
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
        Schema::dropIfExists('applications');
    }
}

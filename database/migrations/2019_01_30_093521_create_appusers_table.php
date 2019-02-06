<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Device_Id');
            $table->string('Country');
            $table->string('Device_Type');
            $table->string('OS_Version');
            $table->float('App_Version');
            $table->string('Is_Full_Access');
            $table->string('Purchase_Ads');
            $table->string('Purchase_Watermark');
            $table->string('Purchase_Unlimited');
            $table->string('Purchase_Subscription');
            $table->string('Last_Date_Of_Subscription');
            $table->integer('app_id')->unsigned();
            $table->foreign('app_id')->references('id')->on('applications');
            $table->softDeletes();
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
        Schema::dropIfExists('appusers');
    }
}

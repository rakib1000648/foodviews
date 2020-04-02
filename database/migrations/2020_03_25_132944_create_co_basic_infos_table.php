<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_basic_infos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name',100);
          $table->string('domain',30)->unique();
          $table->string('email',150)->unique();
          $table->string('phone',15)->unique();
          $table->bigInteger('CoCityId');
          $table->string('address',255);
          $table->bigInteger('CoCategoryId');
          $table->boolean('tc');
          $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('co_basic_infos');
    }
}

<?php namespace IceFox\Service\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('icefox_service_categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('icon');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('icefox_service_categories');
    }
}

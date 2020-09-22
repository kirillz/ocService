<?php namespace IceFox\Service\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('icefox_service_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->double('price', 15, 8);
            $table->string('discount')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('icefox_service_items');
    }
}

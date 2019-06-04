<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewItemsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_items_categories', function (Blueprint $table) {
            $table->integer('itemNo')->unsigned();
			$table->primary('itemNo');
            $table->string('category');
            $table->double('price');
            $table->integer('adminId')->unsigned();
            $table->foreign('adminId')->references('adminId')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_items_categories');
    }
}

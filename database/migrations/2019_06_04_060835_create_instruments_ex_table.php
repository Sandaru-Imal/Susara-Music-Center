<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentsExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument_ex', function (Blueprint $table) {
            $table->integer('instrumentId')->unsigned();
			$table->primary('instrumentId');
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
        Schema::dropIfExists('instruments_exes');
    }
}

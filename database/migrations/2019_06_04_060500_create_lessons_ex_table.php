<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons_ex', function (Blueprint $table) {
            $table->integer('lessonNo')->unsigned();
			$table->primary('lessonNo');
            $table->string('category');
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
        Schema::dropIfExists('lessons_exes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_office_id');
            $table->unsignedBigInteger('type_course_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_hours');
            $table->time('start_time');
            $table->date('expiration');
            $table->timestamps();

            $table->foreign('branch_office_id')
                ->references('id')
                ->on('branch_offices')
                ->onDelete('cascade');
            $table->foreign('type_course_id')
                ->references('id')
                ->on('course_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

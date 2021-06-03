<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_address')->nullable();
            $table->string('school_phone')->nullable();
            $table->string('school_board')->nullable();
            $table->string('school_passed')->nullable();
            $table->string('school_gpa')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('street')->nullable();
            $table->string('t_country')->nullable();
            $table->string('t_province')->nullable();
            $table->string('t_district')->nullable();
            $table->string('t_ward_no')->nullable();
            $table->string('t_street')->nullable();
            $table->string('shift')->nullable();
            $table->string('stream')->nullable();
            $table->string('hostel')->nullable()->default('No');
            $table->string('transportation')->nullable()->default('No');
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_mobile')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('see_card')->nullable();
            $table->string('see_grade')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}

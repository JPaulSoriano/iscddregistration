<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('school_year');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('grade');
            $table->string('address');
            $table->string('phone');
            $table->string('age');
            $table->string('sex');
            $table->string('birthday');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('religion');
            $table->string('email');
            $table->string('no_brothers')->nullable();
            $table->string('brother_ages')->nullable();
            $table->string('no_sisters')->nullable();
            $table->string('sister_ages')->nullable();
            $table->string('father');
            $table->string('father_occupation');
            $table->string('father_phone');
            $table->string('mother');
            $table->string('mother_occupation');
            $table->string('mother_phone');
            $table->string('parent_address');
            $table->string('guardian')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('reg_ref');
            $table->string('payment_method')->nullable();
            $table->string('payment_ref')->nullable()->unique();
            $table->string('image')->nullable();
            $table->enum('status', [0, 1])->default(0);
            $table->enum('status_admission', [0, 1])->default(0);
            $table->enum('status_enrollment', [0, 1])->default(0);
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
        Schema::dropIfExists('registrations');
    }
}

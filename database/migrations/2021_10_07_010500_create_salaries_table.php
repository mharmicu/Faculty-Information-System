<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->nullable();
            $table->string('contact_num')->nullable();
            $table->string('sss')->default('0')->nullable();
            $table->string('deductions')->default('0')->nullable();
            $table->string('salary')->default('0')->nullable();

            $table->bigInteger('personal_info_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('personal_info_id')->references('id')->on('personal_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}

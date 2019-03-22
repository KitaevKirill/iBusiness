<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswer2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('answer_1')->nullable();
            $table->enum('value_1', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_2')->nullable();
            $table->enum('value_2', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_3')->nullable();
            $table->enum('value_3', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_4')->nullable();
            $table->enum('value_4', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_5')->nullable();
            $table->enum('value_5', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_6')->nullable();
            $table->enum('value_6', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_7')->nullable();
            $table->enum('value_7', ['0', 'yes', 'no'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_2s');
    }
}

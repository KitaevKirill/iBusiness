<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswer1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_1s', function (Blueprint $table) {
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
            $table->string('answer_8')->nullable();
            $table->enum('value_8', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_9')->nullable();
            $table->enum('value_9', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_10')->nullable();
            $table->enum('value_10', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_11')->nullable();
            $table->enum('value_11', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_12')->nullable();
            $table->enum('value_12', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_13')->nullable();
            $table->enum('value_13', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_14')->nullable();
            $table->enum('value_14', ['0', 'yes', 'no'])->default('0');
            $table->string('answer_15')->nullable();
            $table->enum('value_15', ['0', 'yes', 'no'])->default('0');
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
        Schema::dropIfExists('answer_1s');
    }
}

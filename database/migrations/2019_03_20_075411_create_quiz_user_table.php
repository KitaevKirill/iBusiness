<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('quiz_id');
//            $table->foreign('quiz_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('quiz_user')->insert(array(
            array(
                'quiz_id' => '1',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '2',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '3',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '4',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '5',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '6',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '7',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '8',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '9',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '10',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '11',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '12',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '13',
                'user_id' => '1',
            ),
            array(
                'quiz_id' => '14',
                'user_id' => '1',
            ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('quiz_user', function (Blueprint $table){
//            $table->dropForeign('quiz_user_quiz_id_foreign');
//            $table->dropForeign('quiz_user_user_id_foreign');
//        });
        Schema::dropIfExists('quiz_user');
    }
}

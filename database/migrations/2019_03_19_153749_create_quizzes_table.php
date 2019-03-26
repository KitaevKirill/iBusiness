<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamps();
        });

        DB::table('quizzes')->insert(array(
            array(
                'title' => 'Отдел кадров',
            ),
            array(
                'title' => 'Администрирование',
            ),
            array(
                'title' => 'Построение',
            ),
            array(
                'title' => 'Персонал',
            ),
            array(
                'title' => 'Коммуникации',
            ),
            array(
                'title' => 'Маркетинг',
            ),
            array(
                'title' => 'Понимание',
            ),
            array(
                'title' => 'Продажи',
            ),
            array(
                'title' => 'Финансы',
            ),
            array(
                'title' => 'Производство',
            ),
            array(
                'title' => 'Торговля',
            ),
            array(
                'title' => 'Услуги',
            ),
            array(
                'title' => 'Пиар',
            ),
            array(
                'title' => 'Качество и совершенствование',
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
        Schema::dropIfExists('quizzes');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('quiz_id');
            $table->integer('number');
            $table->string('question');
            $table->enum('important', ['0', '1'])->default('0');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        DB::table('questions')->insert(array(
            array(
                'quiz_id' => 1,
                'number' => 1,
                'question' => 'Есть ли в компании чек-листы выполнения повторяющихся процессов? Кто, как когда разрабатывает?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 2,
                'question' => ' Есть ли в компании ответственный за бизнес-процессы в компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 3,
                'question' => 'Персонал в компанию нанимается исходя из загрузки процессов?',
                'important' => '1'
            ),
            array(
                'quiz_id' => 1,
                'number' => 4,
                'question' => 'Есть ли в компании должностные инструкции?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 5,
                'question' => 'Сотрудники обращаются к должностным инструкциям при выполнении задач?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 6,
                'question' => 'Правила компании описаны на бумаге?',
                'important' => '1'
            ),
            array(
                'quiz_id' => 1,
                'number' => 7,
                'question' => 'Есть ли в компании человек, кто отвечает за найм?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 8,
                'question' => 'Описана ли технология найма в компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 9,
                'question' => 'Существует испытательный срок для новых сотрудников?',
                'important' => '1'
            ),
            array(
                'quiz_id' => 1,
                'number' => 10,
                'question' => ' Есть ли текучка кадров в компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 11,
                'question' => 'Описана ли технология адаптации нового сотрудника в компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 12,
                'question' => 'Есть ли в компании, кто отвечает за адаптацию сотрудников?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 13,
                'question' => 'Сотрудники компании задействованы в найме?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 1,
                'number' => 14,
                'question' => 'Есть ли в компании система наставничества?',
                'important' => '1'
            ),
            array(
                'quiz_id' => 1,
                'number' => 15,
                'question' => 'Есть ли кто-то в компании, кто отвечает за кадровое делопроизводство?',
                'important' => '1'
            ),
            array(
                'quiz_id' => 2,
                'number' => 1,
                'question' => 'первый вопрос опроса 2',
                'important' => '0'
            ),
            array(
                'quiz_id' => 2,
                'number' => 2,
                'question' => 'второй вопрос опроса 2',
                'important' => '0'
            ),
            array(
                'quiz_id' => 2,
                'number' => 3,
                'question' => 'третий вопрос опроса 2',
                'important' => '1'
            ),array(
                'quiz_id' => 3,
                'number' => 1,
                'question' => 'первый вопрос опроса 3',
                'important' => '0'
            ),
            array(
                'quiz_id' => 3,
                'number' => 2,
                'question' => 'второй вопрос опроса 3',
                'important' => '0'
            ),
            array(
                'quiz_id' => 3,
                'number' => 3,
                'question' => 'третий вопрос опроса 3',
                'important' => '1'
            )
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}

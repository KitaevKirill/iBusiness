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
                'quiz_id' => 6,
                'number' => 1,
                'question' => 'Выполняется ли маркетинг силами компании или на аутсорсе? (если частично, то что делается на аутсорсе?)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 2,
                'question' => 'Проводятся ли у вас маркетинговые опросы или исследования? Как часто?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 3,
                'question' => 'Для чего они обычно проводятся (на какую тему, по какому продукту) и кто их проводит?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 4,
                'question' => 'Разрабатываются ли у вас комплексные рекламные кампании или каждый канал “сам по себе”?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 5,
                'question' => 'Планируете ли вы продвижение? На какой срок? Кто осуществляет планирование?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 6,
                'question' => 'Какие каналы продвижения вы используете? Отслеживаете ли вы отдельно эффективность каждого из них? Как?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 7,
                'question' => 'Взаимодействуют ли маркетологи с другими подразделениями компании? Какими и по каким вопросам?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 8,
                'question' => 'От чего вы отталкиваетесь при разработке материалов для продвижения? Как решаете, какими они должны быть? На какие данные опираетесь? (если “решает маркетолог”, то как он это делает?)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 9,
                'question' => 'Как часто изготавливаются новые материалы для продвижения?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 10,
                'question' => 'Как оцениваете эффективность того или иного материала?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 11,
                'question' => 'Кто отвечает за их наличие в точках распространения?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 12,
                'question' => 'Как вы используете для продвижения интернет?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 13,
                'question' => 'Когда последний раз производилась работа с SEO? Кто ее проводит?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 14,
                'question' => 'Есть ли у компании страницы в социальных сетях? В каких?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 15,
                'question' => 'Кто занимается работой с соц.сетями? Как часто публикуются посты?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 16,
                'question' => 'Какими средствами рекламы в интернете вы пользуетесь? Сколько денег в неделю в среднем на это тратите?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 17,
                'question' => 'Как оцениваете эффективность рекламы в интернете? Как часто корректируете кампании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 18,
                'question' => 'Пользуетесь ли вы для взаимодействия с потенциальными клиентами бумажной почтой? (рассылаете каталоги, листовки и т.п.)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 19,
                'question' => 'Используете ли вы для продвижения e-mail рассылки? Автоматизирован ли процесс? (есть ли воронка продающих писем?)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 20,
                'question' => 'Распространяете ли вы свою рекламу через СМИ? (Если да, то как измеряете эффективность?)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 6,
                'number' => 21,
                'question' => 'Есть ли что-то еще, что предпринимается компанией в отношении продвижения своих продуктов и услуг?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 1,
                'question' => 'Какие средства/инструменты компания использует для формирования у потенциальных клиентов понимания ценности и особенностей продукта?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 2,
                'question' => 'Учитываете ли вы при разработке материалов для понимания то, кто принимает решение о покупке? (не всегда это тот же человек, от которого вы получаете деньги)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 3,
                'question' => 'Кто занимается разработкой этих материалов?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 4,
                'question' => 'Как строится работа с коммерческими предложениями? Есть ли шаблоны или разрабываются каждый раз заново? Кто это делает?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 5,
                'question' => 'Есть ли у компании сайт/сайты? (дайте ссылку)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 6,
                'question' => 'Как часто он обновляется?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 7,
                'question' => 'Есть ли у компании дилеры/дистрибьюторы? Кто занимается их обучением?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 7,
                'number' => 8,
                'question' => 'Есть ли что-то еще, что предпринимается компанией в отношении формирования у потенциальных клиентов понимания ценности продуктов и услуг компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 1,
                'question' => 'Сколько и какие продукты производит/продает ваша компания? (дальше вопросы по каждому отдельному продукту)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 2,
                'question' => 'Опишите процесс предоставления компанией продукта (-ов), начиная с планирования и заканчивая попаданием продукта в руки клиенту (как можно подробнее)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 3,
                'question' => 'Планирует ли компания объем и сроки предоставления продукта клиенту? На какой срок?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 4,
                'question' => 'Согласованы ли эти планы с маркетингом и продажами?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 5,
                'question' => 'Есть ли у вас технологическая документация? (рецептурные и технологические карты, бланки заказов и т.п., необходимые для начала производства продукта)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 6,
                'question' => 'Как много у компании поставщиков? ',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 7,
                'question' => 'Насколько вы зависите от выбора хорошего поставщика? Ведется ли постоянная работа по поиску лучших вариантов?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 8,
                'question' => 'Планирует ли компания закупки? На какой срок?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 9,
                'number' => 1,
                'question' => 'Есть ли в распоряжении производства специальное оборудование?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 10,
                'question' => 'Как планируется и производится  профилактическое обслуживание оборудования? Кто его осуществляет?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 11,
                'question' => 'Нуждается ли производство в отдельном от офиса энергообеспечении? (вода, электричество и прочее)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 12,
                'question' => 'Есть ли в распоряжении производства собственный склад?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 13,
                'question' => 'Как продукт попадает в руки клиента?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 14,
                'question' => 'Есть ли склад готовой продукции?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 15,
                'question' => 'Сколько в компании существует производственных точек? (складов, ресторанов, магазинов и т.д.), если несколько, то где территориально они находятся?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 16,
                'question' => 'Закупка товара производится централизовано  или каждая точка закупает себе отдельно?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 17,
                'question' => 'Есть ли в компании функция логистики?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 18,
                'question' => 'Есть ли в производстве сотрудник, который следит на чистотой производственныйх точек?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 19,
                'question' => 'Есть ли в компании служба безопасности на производстве?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 10,
                'number' => 20,
                'question' => 'Как происходит комплектация продукции на производстве?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 1,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 2,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 3,
                'question' => 'Проводите ли вы исследования рынка при его корректировке?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 4,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 5,
                'question' => 'Планирует ли компания закупки? На какой срок?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 6,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 7,
                'question' => 'Ведется ли постоянная работа по поиску лучших вариантов?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 8,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 9,
                'question' => 'Есть ли у вас особые требования по технике безопасности?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 10,
                'question' => 'Есть ли у вас собственные склады? Сколько?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 11,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 12,
                'question' => 'Есть ли прописанные инструкции по мерчендайзингу/выкладке товаров?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 13,
                'question' => 'Есть ли у вас функция доставки товара клиенту?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 11,
                'number' => 14,
                'question' => 'Есть ли у вас функция сервисного обслуживания?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 1,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 2,
                'question' => 'Планирует ли компания объем и сроки предоставления услуг? На какой срок?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 3,
                'question' => 'Согласованы ли эти планы с маркетингом и продажами?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 4,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 5,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 6,
                'question' => 'Планирует ли компания закупки? На какой срок?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 7,
                'question' => 'Есть ли в распоряжении тех.персонала специальное оборудование?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 8,
                'question' => 'Планируется ли его профилактическое обслуживание? Кто его осуществляет?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 9,
                'question' => 'Нуждается ли производство в отдельном от офиса энергообеспечении? (вода, электричество и прочее)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 10,
                'question' => 'Есть ли в распоряжении производства собственный склад?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 12,
                'number' => 11,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 1,
                'question' => 'Есть ли понимание идеальной картины того, какой имидж должен быть у компании в глазах публики?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 2,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 3,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 4,
                'question' => 'Есть ли в комапнии дресс-код? ',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 5,
                'question' => 'Все ли сотрудники знают какой внешний вид нужно иметь на работе? Как он соблюдается?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 6,
                'question' => 'Есть ли стандарты брендирования помещений и рабочих мест в компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 7,
                'question' => 'Есть ли человек, который контролирует внешний вид сотрудников и помещений?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 8,
                'question' => 'Собирают ли у Вас в компании положительные отзывы от клиентов? Если да, то как именно и как их используют в дальнейшем?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 9,
                'question' => 'Есть в компании человек, отвечающий за размещение отзывов клиентов в интернете?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 10,
                'question' => 'Имеет ли компания награды? Если да, то публикуется ли это где-то?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 11,
                'question' => 'Проводятся ли в компании мероприятия (выезды куда-либо, корпоративы, спортивный отдых и т.д)? Как они организуются? Кто финансирует?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 12,
                'question' => 'Есть ли сотрудник, который организовывает эти мероприятия?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 13,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 14,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 15,
                'question' => 'Есть ли сотрудник, который пишет статьи, сюжеты, новости о компании и ее достижениях, публикует это в интернете, в социальных сетях?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 16,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 17,
                'question' => 'Есть ли прописанные кампании по формированию имиджа? На какой срок? Согласованы ли они с другими подразделениями компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 18,
                'question' => 'Есть ли сотрудник, который отвечает за взаимодействие со СМИ?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 19,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 20,
                'question' => 'Есть ли сотрудник, который отслеживает упоминания компании в СМИ и интернете?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 21,
                'question' => 'Считаете ли вы репутацию компании ее активом? Как это сохраняется и приумножается?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 22,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 23,
                'question' => 'Есть ли что-то еще, что предпринимается компанией в отношении своего имиджа и репутации?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 24,
                'question' => 'Есть ли у компании продукты или услуги, которые вы не относите к основным, но которые предназначены для знакомства клиента с компанией и продвижения ему основных продуктов и услуг? (вводные услуги)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 25,
                'question' => 'Являются ли эти вводные услуги самоокупаемыми?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 26,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 27,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 28,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 29,
                'question' => 'Направлены ли эти вводные услуги на привлечение определенных категорий клиентов или на всех людей?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 30,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 31,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 32,
                'question' => 'Направляют ли ваши клиенты к вам своих знакомых? (есть ли у вас представители)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 33,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 34,
                'question' => 'Направляют ли другие компании к вам своих клиентов? (партнеры)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 35,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 36,
                'question' => 'Подписываете ли вы с ними соглашения об условиях взаимодействия?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 37,
                'question' => 'Выплачиваете ли вы направляющим к вам комиссионные?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 38,
                'question' => 'Ведете ли вы активную работу по поиску новых клиентов через представителей и партнеров?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 39,
                'question' => 'Является ли компания членом  ассоциаций, клубов, движений  или сообществ?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 40,
                'question' => 'Используете ли вы это как инструмент поиска и привлечения клиентов?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 41,
                'question' => 'Есть ли ассоциации или сообщества, в которые вы могли бы вступить?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 42,
                'question' => 'Поддерживаете ли вы с партнерами, представителями и ассоциациями регулярное общение? Сообщаете ли им о новостях и достижениях компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 13,
                'number' => 43,
                'question' => 'Есть ли что-то еще, что предпринимается компанией в отношении создания и поддержания партнерских связей за пределами компании и привлечения таким образом новых клиентов?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 1,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 2,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 3,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 4,
                'question' => 'Существуют ли прописанные стандарты качества по всем производственным операциям?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 5,
                'question' => 'Нужно ли вашей компании для работы подтверждение международного стандарта качества?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 6,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 7,
                'question' => 'Как часто вы проводите опросы клиентов по качеству продуктов компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 8,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 9,
                'question' => 'Есть ли стандартная форма проведения опроса?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 10,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 11,
                'question' => 'Как происходит работа с рекламациями?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 12,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 13,
                'question' => 'Есть ли у этого человека прописанная инструкция, что он может и что не может предпринимать для улаживания клиента?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 14,
                'question' => 'Есть ли в распоряжении этого человека необходимые ресурсы для улаживания?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 15,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 16,
                'question' => 'Проверяете ли вы соответствие фактической себестоимости произведенного продукта плановой?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 17,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 18,
                'question' => 'Есть ли что-то еще, что предпринимается компанией в отношении контроля качества деятельности или продукта?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 19,
                'question' => 'Есть ли у вас в компании библиотека обучающих материалов для сотрудников (книги, брошюры, буклеты, курсы)? Кто отвечает за ее сохранность?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 20,
                'question' => 'Есть ли у вас материалы, знакомящие сотрудников с продуктом компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 21,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 22,
                'question' => 'Есть ли у сотрудников компании индивидуальные программы обучения, связанные с крьерным и профессиональным ростом сотрудников и целями в их развитии?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 23,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 24,
                'question' => 'Есть ли типовые программы обучения сотрудников для занимаемых должностей? (программа подготовки продавца, руководителя производства, менеджера по найму)',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 25,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 26,
                'question' => 'Есть ли в компании специальное место, где сотрудники могут проходить обучение?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 27,
                'question' => 'Есть ли человек, отвечающий за обучение сотрудников компании?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 28,
                'question' => 'Направляете ли вы сотрудников на обучение в сторонние компании? Как часто?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 29,
                'question' => 'Оплачивает ли компания обучение в полном размере, частично или на каких-то других условиях?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 30,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 31,
                'question' => 'Есть ли что-то еще, что предпринимается компанией в отношении обучения и развития сотрудников?',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 32,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 33,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 34,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 35,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 36,
                'question' => 'not_ready_yet',
                'important' => '0'
            ),
            array(
                'quiz_id' => 14,
                'number' => 37,
                'question' => 'Есть ли что-то еще, что предпринимается компанией в отношении совершенствования своей деятельности и продукта?',
                'important' => '0'
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
        Schema::dropIfExists('questions');
    }
}

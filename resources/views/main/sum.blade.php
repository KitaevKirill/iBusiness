@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/sumTable.css') }}" rel="stylesheet">
    <div style="display: table">
        <div style="display: table-cell">
            <table class="innerTable" style="background: #3f9ae5" >
                <tr>
                    <td class="tabletop" colspan="8"><h3>АДМИНИСТРАТИВНОЕ ОТДЕЛЕНИЕ</h3></td>
                </tr>
                <tr>
                    <td><p><b>Стратегическое управление</b></p></td>
                    <td><p><b>Стратегический маркетинг</b></p></td>
                    <td><p><b>Служба Технологии</b></p></td>
                    <td><p><b>Служба Построения и развития компании</b></p></td>
                    <td><p><b>Служба по связям с общественностью</b></p></td>
                    <td><p><b>Служба безопасности Ответственные, регламенты, контроль, Оценка. Как организована
                                работа </b></p>
                    </td>
                    <td><p><b>Служба контроля финансовой деятельности</b></p></td>
                    <td><p><b>Служба управления компанией</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                </tr>
                <tr>
                    <td colspan="8"><p>Общая цель</p></td>
                </tr>
            </table>
        </div>
        <div style="display: table-cell">
            <table class="innerTable" style="background: #e5d455">
                <tr>
                    <td class="tabletop" colspan="3"><h3>ОТДЕЛЕНИЕ ПЕРСОНАЛА И КОММУНИКАЦИИ</h3></td>
                </tr>
                <tr>
                    <td><p><b>Построение</b></p></td>
                    <td><p><b>Персонал</b></p></td>
                    <td><p><b>Коммуникации</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                </tr>
                <tr>
                    <td colspan="3"><p>Общая цель</p></td>
                </tr>
            </table>
        </div>
        <div style="display: table-cell">
            <table class="innerTable" style="background: #dc53e5">
                <tr>
                    <td class="tabletop" colspan="3"><h3>ОТДЕЛЕНИЕ РАСПРОСТРАНЕНИЯ</h3></td>
                </tr>
                <tr>
                    <td><p><b>Маркетинг</b></p></td>
                    <td><p><b>Понимание</b></p></td>
                    <td><p><b>Продажи</b></p></td>
                </tr>
                <tr>
                    <td><p><b>@foreach($marketings as $marketing) <b>Вывод из вопроса:</b> {{$marketing->question}}<br> <br>@endforeach</b></p></td>
                    <td><p><b>@foreach($understanding as $under) <b>Вывод из вопроса:</b> {{$under->question}}<br> <br>@endforeach</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                </tr>
                <tr>
                    <td colspan="3"><p>Общая цель</p></td>
                </tr>
            </table>
        </div>
        <div style="display: table-cell">
            <table class="innerTable" style="background: #e5292b">
                <tr>
                    <td class="tabletop" colspan="3"><h3>ФИНАНСОВЫЙ ОТДЕЛ</h3></td>
                </tr>
                <tr>
                    <td><p><b>Доходы</b></p></td>
                    <td><p><b>Расходы</b></p></td>
                    <td><p><b>Активы и материальная часть</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                </tr>
                <tr>
                    <td colspan="3"><p>Общая цель</p></td>
                </tr>
            </table>
        </div>
        <div style="display: table-cell">
            <table class="innerTable" style="background: #68be16">
                <tr>
                    <td class="tabletop" colspan="3"><h3>ПРОИЗВОДСТВЕННОЕ ОТДЕЛЕНИЕ</h3></td>
                </tr>
                <tr>
                    <td><p><b>Производство</b></p></td>
                    <td><p><b>Торговля</b></p></td>
                    <td><p><b>Услуги</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                </tr>
                <tr>
                    <td colspan="3"><p>Общая цель</p></td>
                </tr>
            </table>
        </div>
        <div style="display: table-cell">
            <table class="innerTable" style="background: #818d93">
                <tr>
                    <td class="tabletop" colspan="3"><h3>ОТДЕЛЕНИЕ КАЧЕСТВА И КВАЛИФИКАЦИИ</h3></td>
                </tr>
                <tr>
                    <td><p><b>Качество</b></p></td>
                    <td><p><b>Совершенствование персонала</b></p></td>
                    <td><p><b>Коррекции</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                </tr>
                <tr>
                    <td colspan="3"><p>Общая цель</p></td>
                </tr>
            </table>
        </div>
        <div style="display: table-cell">
            <table class="innerTable" style="background: #eff209">
                <tr>
                    <td class="tabletop" colspan="3"><h3>ОТДЕЛЕНИЕ ПО РАБОТЕ С ПУБЛИКОЙ</h3></td>
                </tr>
                <tr>
                    <td><p><b>Информирование</b></p></td>
                    <td><p><b>Семинары и вводные услуги</b></p></td>
                    <td><p><b>Связь с общественностью</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                    <td><p><b>Здесь выводы Функций</b></p></td>
                </tr>
                <tr>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                    <td><p><b>Сформированные цели по отделам</b></p></td>
                </tr>
                <tr>
                    <td colspan="3"><p>Общая цель</p></td>
                </tr>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/sumTable.js') }}" defer></script>
@endsection

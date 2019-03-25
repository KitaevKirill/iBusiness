@extends('layouts.app')

@section('content')
    <div class="container">
        <table style="background: rgba(234,241,241,0.9)">
            @foreach($clients as $client)
                <tr>
                    <td style="width: 15%">{{$client->name}} </td>
                    <td style="width: 15%">  {{$client->email}}</td>
                    <td style="width: 60%; text-align: right">
                        <button onclick="window.location.href='/adminpanel/clients/{{$client->id}}'" >Управление доступами к опросам</button>
                    </td>
                    <td style="width: 10%; text-align: right">
                        <button onclick="window.location.href='/adminpanel/clients/{{$client->id}}/fullaccess'" >{{($client->access == '1') ? 'Заблокировать' : 'Разблокировать'}}</button>
                    </td>
                    <td style="width: 10%; text-align: right">
                        <button onclick="if(confirm('Удалить?')){window.location.href='/adminpanel/clients/{{$client->id}}/delete'}else{return false}" >Удалить</button>
                    </td>
                </tr>
            @endforeach
        </table>
        <div><br>
            <button onclick="window.location.href='{{ route('register') }}'"
                    style="background: #4aff98; border-radius: 7px ">Добавить клиента
            </button>
        </div>
    </div>
@endsection
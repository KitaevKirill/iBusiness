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
                </tr>
            @endforeach
        </table>
    </div>
@endsection
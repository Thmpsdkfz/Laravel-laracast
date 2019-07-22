@extends('client-layout')

@section('content')
    <h1 class="title">{{$client->name." ".$client->lastname}}</h1>

    <ul>
        <li>Car Brand: {{$client->carbrand}}</li>
        <li>Car Model: {{$client->carmodel}}</li>
    </ul>

    <a href="/clients/{{$client->id}}/edit">Editar Cliente</a>

@endsection
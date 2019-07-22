@extends('client-layout')

@section('content')
    <h1 class="title">CLIENTS</h1>
    <ul>
        @foreach ($clients as $client)
            <li><a href="/clients/{{$client->id}}">{{$client->name}}</a></li>
        @endforeach
    </ul>

@endsection
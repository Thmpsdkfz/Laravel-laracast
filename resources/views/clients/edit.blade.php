@extends('client-layout')

@section('content')

    <h1 class="title">Edit Client</h1>

    <form class="tile is-6 is-vertical" action="/clients/{{$client->id}}" method="POST">

        @method('PATCH')
        @csrf

        <div class="field">
            <label for="name" class="label">Edit Name</label>
            <div class="control">
                <input type="text" class="input" name="name" value="{{$client->name}}">
            </div>
        </div>

        <div class="field">
            <label for="lastname" class="label">Edit LastName</label>
            <div class="control">
                <input type="text" class="input" name="lastname" value="{{$client->lastname}}">
            </div>
        </div>

        <div class="field">
            <label for="carbrand" class="label">Edit Brand</label>
            <div class="control">
                <input type="text" class="input" name="carbrand" value="{{$client->carbrand}}">
            </div>
        </div>

        <div class="field">
            <label for="carmodel" class="label">Edit Model</label>
            <div class="control">
                <input type="text" class="input" name="carmodel" value="{{$client->carmodel}}">
            </div>
        </div>

        <div class="field">
            <button class="button" type="submit">Update Client</button>
        </div>
    </form>

    <form action="/clients/{{$client->id}}" method="POST">

        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button class="button" type="submit">Delete Client</button>
            </div>
        </div>
        
    </form>
    
@endsection
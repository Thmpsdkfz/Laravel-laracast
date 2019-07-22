@extends('client-layout')

@section('content')

    <h1 class="title">New Client</h1>

    <form class="tile is-4 is-vertical" action="/clients" method="POST">
        @csrf
        <div class="field">
            <label for="name" class="label">Client Name</label>
            <div class="control">
                <input type="text" class="input" name="name" placeholder="Name">
            </div>
        </div>

        <div class="field">
            <label class="label" for="lastname">Client Lastname</label>
            <div class="control">
                <input type="text" class="input" name="lastname" placeholder="LastName">
            </div>
        </div>

        <div class="field">
            <label for="carbrand" class="label">Car Brand</label>
            <div class="control">
                <input type="text" class="input" name="carbrand" placeholder="Brand">
            </div>
        </div>
        
        <div class="field">
            <label for="carmodel" class="label">Car Model</label>
            <div class="control">
                <input type="text" class="input" name="carmodel" placeholder="Model">
            </div>
        </div>

        <div class="field">
            <button class="button is-link" type="submit">New Client</button>
        </div>

    </form>

@endsection         
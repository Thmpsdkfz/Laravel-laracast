@extends('layout')

@section('content')

    <h1 class="title">My Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </li>   
        @endforeach
    </ul>


@endsection


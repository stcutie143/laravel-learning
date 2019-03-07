@extends('projects.playout')
@section('content')
    <h1 class = "title"> Projects Page</h1>

    <ul>
        @foreach($projects as $project)
            <li>
                {{$project->title}}
            </li>
        @endforeach
    </ul>
@endsection

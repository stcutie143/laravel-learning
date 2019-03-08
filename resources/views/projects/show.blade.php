@extends('projects.playout')

@section('content')

<h1 class="title"> {{ $project->title }}</h1>

<h2 class="card-subtitle"> {{ $project->description }}</h2>

<a href="/projects/{{ $project->id }}/edit">Edit</a>

@if($project->tasks->count())
    <div>
        @foreach($project->tasks as $task)
            <li> {{ $task->description }} </li>
        @endforeach
    </div>
@endif




@endsection



@extends('projects.playout')

@section('content')

<h1 class="title"> {{ $project->title }}</h1>

<h2 class="card-subtitle"> {{ $project->description }}</h2>

<a href="/projects/{{ $project->id }}/edit">Edit</a>

@if($project->tasks->count())
    <div class="box" >
        @foreach($project->tasks as $task)
            <div>
                <form method= "POST" action = "/tasks/{{ $task->id }}">
                    @csrf
                    @method('PATCH')

                    <label for = "completed" class="checkbox {{$task->completed? 'is-complete': ''}}">
                        <input type="checkbox" name="completed" onChange = "this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
    </div>
@endif

<form action="/projects/{{$project->id}}/tasks" class="box" method="post">
    @csrf
    <div class="field">
        <label for="description" class="label">New Task</label>

        <div class="control">
            <input type="text" class="input" name="description" placeholder = "New Task">
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link"> Add Task</button>
        </div>
    </div>

</form>


@include('errors')


@endsection



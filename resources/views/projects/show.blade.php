@extends('projects.playout')

@section('content')

<h1 class="title"> {{ $project->title }}</h1>

<h2 class="card-subtitle"> {{ $project->description }}</h2>

<a href="/projects/{{ $project->id }}/edit">Edit</a>

@if($project->tasks->count())
    <div>
        @foreach($project->tasks as $task)
            <div>
                <form method= "POST" action = "/tasks/{{ $task->id }}" >
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




@endsection



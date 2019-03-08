@extends('projects.playout')

@section('content')
<h1 class="title">Edit Project</h1>

<form action="/projects/{{$project->id}}" method="post" style="margin-bottom: 10px">
    {{method_field('PATCH')}}
    {{csrf_field()}}
    <div class ="field">

        <label class="label" for="title">Title</label>
        
        <div class="control">
            <input type="text" name="title" class="input is-medium" value = "{{$project->title}}">
        </div>

    </div>

    <div class ="field">

        <label class="label" for="description">Description</label>

        <div class="control">
            <textarea name="description" class = "textarea is-info">{{ $project->description }}</textarea>

        </div>

    </div>

    <div class="field">

        <div class="control">
            <button type="submit" class="button is-link" name="btn-patch"> Update Project</button>

        </div>

    </div>
</form>

<form action="/projects/{{$project->id}}" method="post" >
    {{method_field('DELETE')}}
    {{csrf_field()}}
    <div class ="field">
        <div class="control">
            <button type="submit" class="button is-danger" name="btn-delete"> Delete Project</button>
        </div>
    </div>
</form>
@endsection

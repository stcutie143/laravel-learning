@extends('projects.playout')

@section('content')

<h1 class="title"> {{ $project->title }}</h1>

<h2 class="card-subtitle"> {{ $project->description }} </h2>

<a href="/projects/{{ $project->id }}/edit" class="button is-link" style="margin-top:20px">Edit</a>
@endsection



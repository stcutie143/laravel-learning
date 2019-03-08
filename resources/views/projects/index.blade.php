@extends('projects.playout')
@section('content')
    <h1 class = "title"> Projects Page</h1>

    <ul>
        @foreach($projects as $project)

          <li>
              <a href="/projects/{{ $project->id }}">
                  {{$project->title}}
              </a>
          </li>

        @endforeach
    </ul>
@endsection

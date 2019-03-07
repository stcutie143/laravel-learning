@extends('projects.playout')

@section('content')
    <h1 class="title">Create Project</h1>

    <form action="/projects" method="post" >
        {{csrf_field()}}
        <div class ="field">

            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" name="title" class="input is-medium">
            </div>

        </div>

        <div class ="field">

            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class = "textarea is-info"></textarea>

            </div>

        </div>

        <div class ="field">

            <div class="control">
                <button type="submit" class="button is-link"> Create Project</button>
            </div>

        </div>
    </form>
@endsection

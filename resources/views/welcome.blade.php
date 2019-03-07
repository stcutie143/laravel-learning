@extends('layout')

@section('title','Bobong Pinoy')
@section('header')

    <p>Just learning laravel</p>
@endsection

@section('content')
    @foreach($tasks as $task)
    <ul>
        <li>

            {{ $task }}
        </li>
    </ul>

@endforeach

@endsection



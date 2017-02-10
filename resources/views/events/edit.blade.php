@extends('layouts.app')

@section('content')
    <h1>Editer l'evenement #{{ $event->id }}</h1>

    <form action="{{ route('events.update', $event) }}" method="POST">
        {{ csrf_field() }}

        {{ method_field('PUT') }}

        @include('events._form', ['submitButtonText' => "Modifier l'evenement"])
    </form>

    <p><a href="{{ route('home') }}">Annuler</a></p>
@stop
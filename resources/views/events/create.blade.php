@extends('layouts.app')

@section('content')
    <h1>Creer un evenement</h1>

    <form action="{{ route('events.store') }}" method="POST">
        {{ csrf_field() }}

        @include('events._form', ['submitButtonText' => 'Creer un evenement'])
    </form>

    <p><a href="{{ route('home') }}">Annuler</a></p>
@stop
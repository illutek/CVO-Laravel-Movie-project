@extends('main')

@section('title', '| Create')

@section('content')
    <div class="page-header">
        <h1>Create Movie</h1>
    </div>
    {!! Form::open(['route'=>'movies.store', 'method'=>'POST']) !!}
    @include('includes._form', ['btnText'=>'Save'])
    {!! Form::close() !!}
@endsection
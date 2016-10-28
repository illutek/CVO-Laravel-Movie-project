@extends('main')

@section('title', '| Edit movie')

@section('content')

    <div class="page-header">
        <h1>Edit movie </h1>
    </div>
    {!! Form::model($movie, ['route' => ['movies.update', $movie->id], 'method'=>'POST']) !!}
    @include('includes._form', ['btnText' => 'Update'])
    {!! Form::close() !!}
@endsection
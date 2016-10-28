@extends('main')

@section('title', '| Show')

@section('content')
    <div class="page-header">
        <h1>Movie Title
            <small> {{ $movie->title }}</small>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>{{ $movie->title }}</h3>
            <p>Director: {{ $movie->director }}</p>
            <p>Genre: {{ $movie->genre }}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <p>Created at: {{ date('j M Y', strtotime($movie->created_at )) }}</p>
                </dl>
                <dl class="dl-horizontal">
                    <p>Updated at: {{ date('j M Y', strtotime($movie->updated_at)) }}</p>
                </dl>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('movies.update', $movie->id) }}" class="btn btn-default btn-block">Edit</a>
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(['route'=>['movies.destroy', $movie->id], 'method' =>'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>


            </div>
            {{--end .weel--}}
        </div>
    </div>

@endsection
@extends('main')

@section('title', 'Home')

@section('content')
    <div class="page-header">
        <h1>All Movies</h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ route('movies.create') }}" class="btn btn-primary">Create New Movie</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            @if($movies->count() > 0)
                <table class="table table-striped">
                    <thead>
                    <thead>
                    <tr class="bg-primary">
                        <th>#</th>
                        <th>Title</th>
                        <th>Director</th>
                        <th>Runtime</th>
                        <th>Genre</th>
                        <th>KNT</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td>{{ $movie->id }}</td>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->director }}</td>
                            <td>{{ $movie->runtime }}</td>
                            <td>{{ $movie->genre }}</td>
                            <td>{{ $movie->KNT ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('movies.update', $movie->id) }}" class="btn btn-default">Edit</a>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="col-md-3">
            <h4 class="">Create a movie</h4>
            {!! Form::open(['route'=>'movies.store', 'method'=>'POST']) !!}
            @include('includes._form', ['btnText'=>'Save'])
            {!! Form::close() !!}
        </div>
    </div>

    {{--let op $movies en niet $movie--}}
    <div class="col-md-12 text-center">{!! $movies->links() !!}</div>
@endsection

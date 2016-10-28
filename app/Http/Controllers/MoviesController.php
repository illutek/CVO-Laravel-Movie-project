<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveMovieRequest;
use App\Movie;
use Illuminate\Http\Request;
use Session;

use PhpParser\Node\Expr\New_;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::orderBy('id', 'desc')->paginate(7);

        return view('movies.index', ['movies' => $movies]);
    }

    public  function create(){
        return view('movies.create');
    }

    /**
     * @param SaveMovieRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public  function store(SaveMovieRequest $request){
        $movie = new Movie();

        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->actors = $request->actors;
        $movie->runtime = $request->runtime;
        $movie->genre = $request->genre;
        $movie->KNT = $request->KNT ? true : false;

        $movie->save();

        Session::flash('success', 'The Movie was succesfully save!');

        return redirect(route('home'));
    }

    public function edit($id){

        $movie = Movie::findOrFail($id);

        return view('movies.edit')->withMovie($movie);
    }

    public function show($id){
        $movie = Movie::findOrFail($id);

        return view ('movies.show')->withMovie($movie);
    }

    public function update($id, SaveMovieRequest $request){
        $movie = Movie::findOrFail($id);

        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->actors = $request->actors;
        $movie->runtime = $request->runtime;
        $movie->genre = $request->genre;
        $movie->KNT = $request->KNT ? true: false;

        $movie->save();

        Session::flash('success', 'The Movie was succesfully updated!');

        return redirect(route('home'));

    }

    public function destroy($id){
        $movie = Movie::find($id);

        $movie->delete();

        return redirect(route('home'));
    }
}

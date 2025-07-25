<?php

namespace App\Http\Controllers;

use App\Models\EliMovies;
use Illuminate\Http\Request;

class EliMoviesController extends Controller
{
    public function elizabeth(){
        return view('elizabeth');
    }
    
    public function index(){
        $movies = EliMovies::all();
        return view('eliMovies.index', compact('movies'));
    }

    public function save(Request $request){
        $validated = $request->validate([
            'title'         => 'required|string',
            'description'   => 'required|string',
            'comments'      => 'required|string',
            'fav_ost'       => 'required|string',
            'final_note'    => 'required|string',
        ]);

        EliMovies::create([
            'title'         => $validated['title'],
            'description'   => $validated['description'],
            'comments'      => $validated['comments'],
            'fav_ost'       => $validated['fav_ost'],
            'final_note'    => $validated['final_note'],
        ]);

        return redirect()->route('eliMovies.save')->with('success', "{$validated['title']} agregado correctamente");
    }

    public function edit($id){
        $movie = EliMovies::findOrFail($id);
        return view('eliMovies.edit', compact('movie'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title'         => 'required|string',
            'description'   => 'required|string',
            'comments'      => 'required|string',
            'fav_ost'       => 'required|string',
            'final_note'    => 'required|string',
        ]);

        $movie = EliMovies::findOrFail(id: $id);
        $movie->update([
            'title'         => $validated['title'],
            'description'   => $validated['description'],
            'comments'      => $validated['comments'],
            'fav_ost'       => $validated['fav_ost'],
            'final_note'    => $validated['final_note'],
        ]);

        return redirect()->route('eliMovies')->with('success', "{$movie['title']} Actualizado Correctamente");
    }

    public function destroy($id){
        $movie = EliMovies::findOrFail(id: $id);
        $movie->delete();

        return redirect()->route('eliMovies')->with('success', "{$movie['title']} Eliminado correctamente");
    }
}

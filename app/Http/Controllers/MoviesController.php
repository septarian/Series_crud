<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){

        $movies = Movies::all();

        return view('movies.index', compact('movies'));
    }

    public function save(Request $request){
        $validated = $request->validate([
            'title'         => 'required|string',
            'description'   => 'required|string',
            'comments'      => 'required|string',
            'fav_ost'       => 'required|string',
            'final_note'    => 'required|string',
        ]);

        Movies::create([
            'title'         => $validated['title'],
            'description'   => $validated['description'],
            'comments'      => $validated['comments'],
            'fav_ost'       => $validated['fav_ost'],
            'final_note'    => $validated['final_note'],
        ]);

        return redirect()->route('movies')->with('success', "{$validated['title']} Agregado Correctamente");
    }

    public function edit($id){
        $movie = Movies::findOrFail(id: $id);   #busca el elemento por su id o falla
        return view('movies.edit', compact('movie'));   #regresa la vista
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title'         => 'required|string',
            'description'   => 'required|string',
            'comments'      => 'required|string',
            'fav_ost'       => 'required|string',
            'final_note'    => 'required|string',
        ]);

        $movie = Movies::findOrFail(id: $id);
        $movie->update([
            'title'         => $validated['title'],
            'description'   => $validated['description'],
            'comments'      => $validated['comments'],
            'fav_ost'       => $validated['fav_ost'],
            'final_note'    => $validated['final_note'],
        ]);

        return redirect()->route('movies')->with('success', "{$movie['title']} Actualizado Correctamente");
    }

    public function destroy($id){
        $movie = Movies::findOrFail(id: $id);
        $movie->delete();

        return redirect()->route('movies')->with('success', "{$movie['title']} Eliminado Correctamente");
    }
}

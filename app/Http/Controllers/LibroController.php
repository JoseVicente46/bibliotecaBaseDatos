<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::paginate(5);
        $autores = Autor::get();
        return view('libros', compact('libros','autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $libro = new Libro();
        $libro->titulo = $request->get('titulo');
        $libro->editorial = $request->get('editorial');
        $libro->precio = $request->get('precio');
        $libro->id_autor = $request->get('autor');
        $libro->save();
        return redirect()->route("libros.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $libro = Libro::find($id);
        $autores = Autor::get();
        return view('mod', compact('libro','autores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request);
        Libro::findOrFail($id)->update($request->all());
        return redirect()->route("libros.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Libro::findOrFail($id)->delete();
        return redirect()->route("libros.index");
    }

    public function apiLista(string $id){
        $libros = Libro::find($id);
        return $libros;    
    }
}

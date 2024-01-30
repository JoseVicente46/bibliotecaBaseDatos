<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;


class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::get();
        return view('autores', compact('autores'));
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $libros = Autor::findOrFail($id)->libros();
        return view('librosAutor',compact('libros'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function lista(Request $request){
        $id = $request->get('autor');
        $libros = Autor::findOrFail($id)->libros;
        return view('librosAutor',compact('libros'));    
    }

    public function apiLista(string $id){
        $libros = Autor::findOrFail($id)->libros;
        return $libros;    
    }
}

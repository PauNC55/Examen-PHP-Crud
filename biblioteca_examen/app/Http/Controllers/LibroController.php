<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class LibroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',
        ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = libro::get();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = new libro();
        $libro->titulo = $request->get('titulo');
        $libro->editorial = $request->get('editorial');
        $libro->autor = $request->get('autor');
        $libro->imagen = $request->get('imagen');
        $libro->save();
        return redirect()->route('libros.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $libro = libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        //No hace falta
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libro $libro)
    {
        //No hace falta
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Libro::findOrFail($id)->delete();
        return redirect()->route('libros.index');
    }
}

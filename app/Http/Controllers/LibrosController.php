<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function listar(){
        $libros = Libro::all();
        return view('libros.listar')->with('libros', $libros);
    }

    public function crear() {
        return view('libros.crear');
    }

    public function editar($idLibro) 
    {
        $libro = Libro::findOrFail($idLibro);
        
        return view('/libros.editar')->with('libro', $libro);
    }

    public function guardar(Request $request)
    {
        $formulario = $request->validate([
            'titulo' => 'String | required',
            'descripcion' => 'String',
            'autor' => 'String | required',
        ]);
        #challenge
        $libro = new libro();
        $libro -> titulo = $formulario['titulo'];
        $libro -> descripcion = $formulario['descripcion'];
        $libro -> autor = $formulario['autor'];
        $libro -> save();

        return redirect('/libros')->with('success', 'Libro creado');
    }

    public function actualizar(Request $request,$idLibro) 
    {
        $libro = Libro::findOrFail($idLibro);
        $libro->fill($request->validate([
            'titulo' => 'String | required',
            'descripcion' => 'String',
            'autor' => 'String | required',
        ]));
        $libro->save();
        return redirect('/libros')->with('success', 'Libro Actualizado');
    }

    public function eliminar($idLibro) 
    {
        $libro = Libro::findOrFail($idLibro);
        $libro->delete();
        return redirect('libros')->with('success', 'Libro removido');
    }
}

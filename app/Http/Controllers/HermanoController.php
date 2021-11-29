<?php

namespace App\Http\Controllers;

use App\Models\Hermano;
use Illuminate\Http\Request;

class HermanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hermanos=Hermano::orderBy('apellidos')->orderBy('nombre')->paginate(999);
        return view('hermanos.index', compact('hermanos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hermanos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>['required', 'string', 'min:3', 'max:30'],
            'apellidos'=>['required', 'string', 'min:4', 'max:40'],
            'direccion'=>['required', 'string', 'min:3', 'max:90'],
            'telefono'=>['required', 'string', 'min:9', 'max:35'],
            'numero'=>['required', 'string', 'min:1', 'max:3', 'unique:hermanos,numero'],
            'email'=>['required', 'string', 'min:4', 'max:40'],
            'dni'=>['required', 'string', 'min:9', 'max:9'],
            'fechaNac'=>['required', 'string', 'min:9', 'max:10'],
            'fechaIng'=>['required', 'string', 'min:9', 'max:10']
        ]);
        try{
            Hermano::create($request->all());
        }catch(\Exception $ex){
            return redirect()->route('hermanos.index')->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('hermanos.index')->with('mensaje', 'Hermano Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hermano  $hermano
     * @return \Illuminate\Http\Response
     */
    public function show(Hermano $hermano)
    {
        return view('hermanos.show', compact('hermano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hermano  $hermano
     * @return \Illuminate\Http\Response
     */
    public function edit(Hermano $hermano)
    {
        return view('hermanos.edit', compact('hermano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hermano  $hermano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hermano $hermano)
    {
        $request->validate([
            'nombre'=>['required', 'string', 'min:3', 'max:30'],
            'apellidos'=>['required', 'string', 'min:4', 'max:40'],
            'direccion'=>['required', 'string', 'min:3', 'max:90'],
            'telefono'=>['required', 'string', 'min:9', 'max:35'],
            'numero'=>['required', 'string', 'min:1', 'max:3', 'unique:hermanos,numero,'.$hermano->id],
            'email'=>['required', 'string', 'min:4', 'max:40'],
            'dni'=>['required', 'string', 'min:9', 'max:9']
        ]);
        try{
            $hermano->update($request->all());
        }catch(\Exception $ex){
            return redirect()->route('hermanos.index')->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('hermanos.show', $hermano->id)->with('mensaje', 'Hermano Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hermano  $hermano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hermano $hermano)
    {
        try{
            $hermano->delete();
        }catch(\Exception $ex){
            return redirect()->route('hermanos.index')->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('hermanos.index')->with('mensaje', 'Hermano Borrado');
    }
}

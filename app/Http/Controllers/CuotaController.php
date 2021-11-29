<?php

namespace App\Http\Controllers;

use App\Models\Cuota;
use App\Models\Hermano;
use Illuminate\Http\Request;

class CuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuotas=Cuota::orderBy('estado')->orderBy('ano')->paginate(999);
        return view('cuotas.index', compact('cuotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Hermano $hermano)
    {
        $misEstados=Cuota::getEstados();
        $hermanos=Hermano::getArrayIdNombre();
        return view('cuotas.create', compact('misEstados', 'hermanos', 'hermano'));
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
            'ano'=>['required', 'string', 'min:4', 'max:4'],
            'motivo'=>['required', 'string', 'min:3', 'max:100'],
            'estado'=>['required', 'string', 'min:1', 'max:20'],
            'precio'=>['required', 'string', 'min:0', 'max:10'],
        ]);
        try{
            Cuota::create($request->all());
        }catch(\Exception $ex){
            return redirect()->back()->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('cuotas.index')->with('mensaje', 'Cuota Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function show(Cuota $cuota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuota $cuota)
    {
        $misEstados=Cuota::getEstados();
        $hermanos=Hermano::getArrayIdNombre();
        return view('cuotas.edit', compact('misEstados', 'hermanos','cuota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuota $cuota)
    {
        $request->validate([
            'ano'=>['required', 'string', 'min:4', 'max:4'],
            'motivo'=>['required', 'string', 'min:3', 'max:100'],
            'estado'=>['required', 'string', 'min:1', 'max:20'],
            'precio'=>['required', 'string', 'min:0', 'max:10']
            
        ]);
        try{
            $cuota->update($request->all());
        }catch(\Exception $ex){
            return redirect()->route('hermanos.index')->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('hermanos.index')->with('mensaje', 'Cuota Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuota $cuota)
    {
        try{
            $cuota->delete();
        }catch(\Exception $ex){
            return redirect()->back()->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('hermanos.index')->with('mensaje', 'Cuota Borrada');
    }
}

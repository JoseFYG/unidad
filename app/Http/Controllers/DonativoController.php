<?php

namespace App\Http\Controllers;

use App\Models\Donativo;
use App\Models\Hermano;
use Illuminate\Http\Request;

class DonativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donativos=Donativo::orderBy('ano')->paginate(999);
        return view('donativos.index', compact('donativos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Hermano $hermano)
    {
        $hermanos=Hermano::getArrayIdNombre();
        return view('donativos.create', compact('hermanos', 'hermano'));
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
            'dinero'=>['required', 'string', 'min:3', 'max:20'],
            'info'=>['required', 'string', 'min:1', 'max:100'],
        ]);
        try{
            Donativo::create($request->all());
        }catch(\Exception $ex){
            return redirect()->back()->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('donativos.index')->with('mensaje', 'Donativo Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function show(Donativo $donativo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function edit(Donativo $donativo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donativo $donativo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donativo $donativo)
    {
        try{
            $donativo->delete();
        }catch(\Exception $ex){
            return redirect()->back()->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('donativos.index')->with('mensaje', 'Donativo Borrado');
    }
}

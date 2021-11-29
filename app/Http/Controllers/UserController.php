<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hermano;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('name')->paginate(999);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $hermanos=Hermano::orderBy('apellidos')->paginate(999);
        return view('users.create', compact('hermanos'));
    }

    public function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $ano_diferencia--;
        return $ano_diferencia;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hermano  $hermano
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try{
            $user->delete();
        }catch(\Exception $ex){
            return redirect()->route('users.index')->with('mensaje', 'Error: '.$ex->getMessage().' BD');
        }
        return redirect()->route('users.index')->with('mensaje', 'Cuenta Borrada');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hermano extends Model
{
    use HasFactory;
    protected $fillable=['nombre', 'apellidos', 'direccion', 'dni', 'telefono', 'email', 'numero', 'fechaNac', 'fechaIng', 'cortejo', 'medalla'];

    public function cuotas(){
        return $this->hasMany(Cuota::class);
    }

    public function donativos(){
        return $this->hasMany(Donativo::class);
    }

    public static function getArrayIdNombre(){
        $hermanos=Hermano::orderBy('numero')->orderBy('apellidos')->get();
        $miArray=[];
        foreach($hermanos as $item){
            $miArray[$item->id]=$item->numero." - ".$item->apellidos.", ".$item->nombre;
        }
        return $miArray;
    }

    public static function getCortejo(){
        $miArray=[];
        $miArray[0]="Nazareno";
        $miArray[1]="Mantilla";
        $miArray[2]="Costalero";
        $miArray[3]="Acólito";
        return $miArray;
    }

    public static function getMedalla(){
        $miArray=[];
        $miArray[0]="Con Medalla";
        $miArray[1]="Sin Medalla";
        return $miArray;
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    use HasFactory;
    protected $fillable=['ano', 'motivo', 'estado', 'precio', 'hermano_id'];

    public function hermano(){
        return $this->belongsTo(Hermano::class);
    }

    public static function getEstados(){
        $miArray=[];
        $miArray[0]="Pagado";
        $miArray[1]="Pendiente";
        return $miArray;
    }
}

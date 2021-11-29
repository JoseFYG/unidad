<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donativo extends Model
{
    use HasFactory;
    protected $fillable=['ano', 'dinero', 'info', 'hermano_id'];

    public function hermano(){
        return $this->belongsTo(Hermano::class);
    }
}

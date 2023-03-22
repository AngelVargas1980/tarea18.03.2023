<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camionModel extends Model
{

    use HasFactory;

    //Relación uno a muchos (inversa)
    public function Transporte(){
        return $this->belongsTo('app\Models\transporteModel');


    }
}

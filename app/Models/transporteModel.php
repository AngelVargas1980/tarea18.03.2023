<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporteModel extends Model
{

    use HasFactory;
//Relación de uno a muchos
public function Camion(){
    return $this->hasMany('App\Models\camionModel');

}

}

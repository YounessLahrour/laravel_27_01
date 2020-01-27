<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $fillable=['titulo','sinopsis','pvp', 'stock','isbn'];

    //query scopes
public function scopeTitulo($query, $texto){
    return $query->where('titulo','like',"%$texto%");
}
public function scopeSinopsis($query, $texto){
    return $query->where('sinopsis','like',"%$texto%");
}
public function scopePvp($query, $texto){
    if($texto=='value1'){
        return $query->whereBetween('pvp', [1, 200]);
    }elseif($texto=='value2'){
        return $query->whereBetween('pvp', [200, 500]);
    }else{
        return $query->where('pvp', '>',500);
    }
    
}

}

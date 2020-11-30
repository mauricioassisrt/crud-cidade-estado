<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'nome', 'estado_id','remember_token',
    ];
    public function estados()
    {
        return $this->hasOne(Estado::class, $foreignKey = 'id', $localKey = 'estado_id' );
    }
}

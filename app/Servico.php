<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * Acessar o id dos donos do serviço
     */
    
     public function user() {
        return $this->belongsTo('App\User');
    }

    public function candidatos(){
        return $this->belongsToMany('App\User', 'candidaturas', 'servico_id', 'user_id');
    }

    protected $dates = [
        'horaInicial',
        'horaFinal'
    ];

    protected $attributes = [
        'status' => 'Active',
    ];

}

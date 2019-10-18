<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'password','sobrenome','rg','cpf','sexo','endereco','numero','complemento','bairro','cidade','uf','cep','saldo','telefone_1','telefone_2','url_img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $rules = [
        'nome' => 'required | min:1 | max:50',
        'sobrenome' => 'required | min:1 | max:50',
        'rg' => 'nullable | min:7 | max:15',
        'cpf' => 'nullable | min:7 | max:15',
        'email' => 'required | email',
        'endereco' => 'nullable | string | max:30',
        'numero' => 'nullable | max:15',
        'complemento' => 'nullable | max:30',
        'bairro' => 'nullable | max:30',
        'cidade' => 'nullable | max:30',
        'uf' => 'nullable | string | min:2 | max:2',
        'cep' => 'nullable | max:8',
        'telefone_1' => 'nullable | numeric | max:11',
        'telefone_2' => 'nullable | numeric | max:11',
        'url_img' => 'nullable | image'
    ];

    public function candidaturas(){
        return $this->belongsToMany('App\Servico', 'candidaturas', 'user_id', 'servico_id');
    }

    public function servicos(){
        return $this->hasMany('App\Servico','id_dono','id');
    }

}

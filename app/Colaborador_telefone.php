<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador_telefone extends Model
{
    protected $table = 'colaborador_telefone';
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';
}

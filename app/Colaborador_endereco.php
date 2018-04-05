<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador_endereco extends Model
{
    protected $table = 'colaboradores_endereco';
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';
}

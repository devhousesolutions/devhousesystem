<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador_usuarios extends Model
{
    protected $table = 'colaborador_usuarios';
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';
}

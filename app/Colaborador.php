<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'colaboradores';
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';
}

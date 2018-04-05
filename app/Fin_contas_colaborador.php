<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fin_contas_colaborador extends Model
{
    protected $table = 'fin_contas_colaboradores';
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';
}

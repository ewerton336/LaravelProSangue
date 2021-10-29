<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarioEvento extends Model
{
    use HasFactory;

    protected $fillable = ['nome_evento','dt_evento','qtd_interessados', 'local_coleta', 'entidade_coletora'];
}

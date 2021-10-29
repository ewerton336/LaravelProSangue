<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    use HasFactory;
    protected $fillable = ['nome','dt_nascimento','endereco', 'num_residencia', 'telefone', 'cidade_doacao', 'tipo_sanguineo'];
}

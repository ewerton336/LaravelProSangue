<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CedenteLocal extends Model
{
    use HasFactory;

    protected $fillable = ['nome','telefone','endereco', 'responsavel'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminEvento extends Model
{
    use HasFactory;
    protected $fillable = ['id_admin','id_evento'];
}

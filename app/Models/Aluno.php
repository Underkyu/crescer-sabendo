<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nome',
        'CPF',
        'Nascimento',
        'Email',
        'Id_Responsavel',
    ];
}

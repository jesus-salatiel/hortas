<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;
    protected $table = "escolas";

    protected $fillable = [
        'escola',
        'cie',
        'regiao',
        'bairro',
        'endereco',
        'telefone',
        'horta_id'
    ];

    public function horta(){

        return $this->belongsTo(Horta::class);
    }
}

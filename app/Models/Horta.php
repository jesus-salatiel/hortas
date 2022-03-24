<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horta extends Model
{
    use HasFactory;
    protected $table = "hortas";

    protected $fillable = [
        'nome_horta',
        'foto',
        'descricao',
    ];
    public function escola(){

        return $this->belongsTo(Escola::class);

    }

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

}

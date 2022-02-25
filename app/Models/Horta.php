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
        'foto_horta',
        'escola_id'
    ];

    public function escola(){

        return $this->hasOne(Escola::class);
    }
}

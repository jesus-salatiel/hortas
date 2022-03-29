<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\Escola;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "hortas";

    protected $fillable = [
        'nome_horta',
        'foto',
        'descricao',
        'escola_id',

    ];
    public function escola(){

        return $this->belongsTo(Escola::class);

    }

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

}

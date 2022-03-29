<?php

namespace App\Models;

use App\Models\Horta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;

    protected $table = "fotos";

    protected $fillable = [
        'url',
        'horta_id',

    ];

    public function horta()
    {
        return $this->belongsTo(Horta::class);
    }
}

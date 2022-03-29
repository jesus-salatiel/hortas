<?php

namespace App\Models;

use App\Models\Horta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foto extends Model
{
    use HasFactory;
    use SoftDeletes;

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

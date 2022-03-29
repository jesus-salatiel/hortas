<?php

namespace App\Models;

use App\Models\Horta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Escola extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function hortas(){

        return $this->hasMany(Horta::class);

    }

}

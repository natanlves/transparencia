<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = ['usuario_id', 'consulta', 'page_url'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
    use HasFactory;
}

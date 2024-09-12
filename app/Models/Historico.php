<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = ['user_id', 'termo_pesquisa', 'page_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;
}

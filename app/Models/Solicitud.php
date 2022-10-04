<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'tecnico_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

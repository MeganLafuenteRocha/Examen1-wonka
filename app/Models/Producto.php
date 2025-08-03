<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'stock',
        'marca_id',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'precio' => 'decimal:2',
    ];

    /**
     * Relación muchos a uno con marca
     * Un producto pertenece a una marca
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_proveedor';
    protected $fillable = ['nombre', 'contacto', 'ubicacion'];

    public function abastecimientos()
    {
        return $this->hasMany(Abastecimiento::class, 'id_proveedor');
    }
}

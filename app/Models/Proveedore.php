<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id_proveedor
 * @property $nombre
 * @property $contacto
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Abastecimiento[] $abastecimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_proveedor', 'nombre', 'contacto', 'ubicacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function abastecimientos()
    {
        return $this->hasMany(\App\Models\Abastecimiento::class, 'id_proveedor', 'id_proveedor');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Abastecimiento
 *
 * @property $id_abastecimiento
 * @property $id_proveedor
 * @property $id_fabricante
 * @property $id_combustible
 * @property $cantidad
 * @property $fecha_abastecimiento
 * @property $created_at
 * @property $updated_at
 *
 * @property Combustible $combustible
 * @property Fabricante $fabricante
 * @property Proveedore $proveedore
 * @property Envio[] $envios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Abastecimiento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_abastecimiento', 'id_proveedor', 'id_fabricante', 'id_combustible', 'cantidad', 'fecha_abastecimiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function combustible()
    {
        return $this->belongsTo(\App\Models\Combustible::class, 'id_combustible', 'id_combustible');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fabricante()
    {
        return $this->belongsTo(\App\Models\Fabricante::class, 'id_fabricante', 'id_fabricante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedore()
    {
        return $this->belongsTo(\App\Models\Proveedore::class, 'id_proveedor', 'id_proveedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function envios()
    {
        return $this->hasMany(\App\Models\Envio::class, 'id_abastecimiento', 'id_abastecimiento');
    }
    
}

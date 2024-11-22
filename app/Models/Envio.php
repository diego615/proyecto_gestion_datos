<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Envio
 *
 * @property $id_envio
 * @property $id_abastecimiento
 * @property $id_naviera
 * @property $fecha_envio
 * @property $cantidad_enviada
 * @property $created_at
 * @property $updated_at
 *
 * @property Abastecimiento $abastecimiento
 * @property Naviera $naviera
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Envio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_envio', 'id_abastecimiento', 'id_naviera', 'fecha_envio', 'cantidad_enviada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function abastecimiento()
    {
        return $this->belongsTo(\App\Models\Abastecimiento::class, 'id_abastecimiento', 'id_abastecimiento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function naviera()
    {
        return $this->belongsTo(\App\Models\Naviera::class, 'id_naviera', 'id_naviera');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Combustible
 *
 * @property $id_combustible
 * @property $tipo_combustible
 * @property $descripcion
 * @property $ecologico
 * @property $created_at
 * @property $updated_at
 *
 * @property Abastecimiento[] $abastecimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Combustible extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_combustible', 'tipo_combustible', 'descripcion', 'ecologico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function abastecimientos()
    {
        return $this->hasMany(\App\Models\Abastecimiento::class, 'id_combustible', 'id_combustible');
    }
    
}

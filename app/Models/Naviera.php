<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Naviera
 *
 * @property $id_naviera
 * @property $nombre
 * @property $contacto
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Envio[] $envios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Naviera extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_naviera', 'nombre', 'contacto', 'ubicacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function envios()
    {
        return $this->hasMany(\App\Models\Envio::class, 'id_naviera', 'id_naviera');
    }
    
}

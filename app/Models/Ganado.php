<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ganado
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre
 * @property $numero
 * @property $sexo
 * @property $peso
 * @property $raza_id
 * @property $proveedor_id
 *
 * @property Proveedor $proveedor
 * @property Raza $raza
 * @property Vacunadet[] $vacunadets
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ganado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'numero' => 'required',
		'sexo' => 'required',
		'peso' => 'required',
		'raza_id' => 'required',
		'proveedor_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','numero','sexo','peso','raza_id','proveedor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'id', 'proveedor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function raza()
    {
        return $this->hasOne('App\Models\Raza', 'id', 'raza_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacunadets()
    {
        return $this->hasMany('App\Models\Vacunadet', 'ganado_id', 'id');
    }
    

}

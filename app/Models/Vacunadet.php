<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacunadet
 *
 * @property $id
 * @property $vacuna_id
 * @property $ganado_id
 * @property $fecha_dosis
 * @property $fecha_proxima_dosis
 * @property $created_at
 * @property $updated_at
 *
 * @property Ganado $ganado
 * @property Vacuna $vacuna
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vacunadet extends Model
{
    
    static $rules = [
		'vacuna_id' => 'required',
		'ganado_id' => 'required',
		'fecha_dosis' => 'required',
		'fecha_proxima_dosis' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['vacuna_id','ganado_id','fecha_dosis','fecha_proxima_dosis'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ganado()
    {
        return $this->hasOne('App\Models\Ganado', 'id', 'ganado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vacuna()
    {
        return $this->hasOne('App\Models\Vacuna', 'id', 'vacuna_id');
    }
    

}

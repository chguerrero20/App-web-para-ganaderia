<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacuna
 *
 * @property $id
 * @property $vacuna
 * @property $created_at
 * @property $updated_at
 *
 * @property Vacunadet[] $vacunadets
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vacuna extends Model
{
    
    static $rules = [
		'vacuna' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['vacuna'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacunadets()
    {
        return $this->hasMany('App\Models\Vacunadet', 'vacuna_id', 'id');
    }
    

}

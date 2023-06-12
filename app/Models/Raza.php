<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Raza
 *
 * @property $id
 * @property $raza
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Raza extends Model
{
    
    static $rules = [
		'raza' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['raza','tipo'];



}

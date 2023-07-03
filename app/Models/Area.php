<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $id
 * @property $area_code
 * @property $area
 * @property $concept
 * @property $register_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor[] $doctors
 * @property Recepcionist[] $recepcionists
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'area_code' => 'required',
		'area' => 'required',
		'concept' => 'required',
		'register_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['area_code','area','concept','register_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor', 'area', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recepcionists()
    {
        return $this->hasMany('App\Models\Recepcionist', 'area', 'id');
    }
    

}

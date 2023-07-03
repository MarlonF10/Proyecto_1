<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Speciality
 *
 * @property $id
 * @property $speciality_code
 * @property $speciality
 * @property $concept
 * @property $register_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor[] $doctors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Speciality extends Model
{
    
    static $rules = [
		'speciality_code' => 'required',
		'speciality' => 'required',
		'concept' => 'required',
		'register_date' => 'required',
    ];
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','speciality_code','speciality','concept','register_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor', 'speciality', 'id');
    }
    

}

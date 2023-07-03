<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Disease
 *
 * @property $id
 * @property $disease_code
 * @property $disease
 * @property $concept
 * @property $symptoms
 * @property $register_date
 * @property $treatment_type
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation[] $consultations
 * @property TreatmentType $treatmentType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Disease extends Model
{
    
    static $rules = [
		'disease_code' => 'required',
		'disease' => 'required',
		'concept' => 'required',
		'symptoms' => 'required',
		'register_date' => 'required',
		'treatment_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['disease_code','disease','concept','symptoms','register_date','treatment_type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'disease', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function treatmentType()
    {
        return $this->hasOne('App\Models\TreatmentType', 'id', 'treatment_type');
    }
    

}

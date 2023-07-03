<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Antecedent
 *
 * @property $id
 * @property $antecedent_code
 * @property $antecedent
 * @property $concept
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
class Antecedent extends Model
{
    
    static $rules = [
		'antecedent_code' => 'required',
		'antecedent' => 'required',
		'concept' => 'required',
		'register_date' => 'required',
		'treatment_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['antecedent_code','antecedent','concept','register_date','treatment_type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'antecedent', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function treatmentType()
    {
        return $this->hasOne('App\Models\TreatmentType', 'id', 'treatment_type');
    }
    

}

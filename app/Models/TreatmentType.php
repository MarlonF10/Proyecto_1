<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TreatmentType
 *
 * @property $id
 * @property $treatment_type_code
 * @property $tratment_type
 * @property $concept
 * @property $register_date
 * @property $severity_type
 * @property $created_at
 * @property $updated_at
 *
 * @property Antecedent[] $antecedents
 * @property Consultation[] $consultations
 * @property Disease[] $diseases
 * @property SeverityType $severityType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TreatmentType extends Model
{
    
    static $rules = [
		'treatment_type_code' => 'required',
		'tratment_type' => 'required',
		'concept' => 'required',
		'register_date' => 'required',
		'severity_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['treatment_type_code','tratment_type','concept','register_date','severity_type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function antecedents()
    {
        return $this->hasMany('App\Models\Antecedent', 'treatment_type', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'tratment_type', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diseases()
    {
        return $this->hasMany('App\Models\Disease', 'treatment_type', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function severityType()
    {
        return $this->hasOne('App\Models\SeverityType', 'id', 'severity_type');
    }
    

}

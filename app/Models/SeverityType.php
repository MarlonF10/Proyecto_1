<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SeverityType
 *
 * @property $id
 * @property $severity_type_code
 * @property $severity_type
 * @property $concept
 * @property $register_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation[] $consultations
 * @property Exam[] $exams
 * @property TreatmentType[] $treatmentTypes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SeverityType extends Model
{
    
    static $rules = [
		'severity_type_code' => 'required',
		'severity_type' => 'required',
		'concept' => 'required',
		'register_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['severity_type_code','severity_type','concept','register_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'severity_type', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany('App\Models\Exam', 'severity_type', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function treatmentTypes()
    {
        return $this->hasMany('App\Models\TreatmentType', 'severity_type', 'id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Exam
 *
 * @property $id
 * @property $exam_code
 * @property $results
 * @property $doctor
 * @property $patient
 * @property $exam_type
 * @property $severity_type
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation[] $consultations
 * @property Doctor $doctor
 * @property ExamType $examType
 * @property Patient $patient
 * @property SeverityType $severityType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Exam extends Model
{
    
    static $rules = [
		'exam_code' => 'required',
		'results' => 'required',
		'doctor' => 'required',
		'patient' => 'required',
		'exam_type' => 'required',
		'severity_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['exam_code','results','doctor','patient','exam_type','severity_type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'exam', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'doctor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function examType()
    {
        return $this->hasOne('App\Models\ExamType', 'id', 'exam_type');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne('App\Models\Patient', 'id', 'patient');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function severityType()
    {
        return $this->hasOne('App\Models\SeverityType', 'id', 'severity_type');
    }
    

}

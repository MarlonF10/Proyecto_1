<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultation
 *
 * @property $id
 * @property $consultation_code
 * @property $blood_pressure
 * @property $temperature
 * @property $breathing_frequency
 * @property $heart_rate
 * @property $saturation
 * @property $body_weight
 * @property $body_height
 * @property $time_symptoms
 * @property $physical_exam
 * @property $patient
 * @property $antecedent
 * @property $exam
 * @property $disease
 * @property $severity_type
 * @property $tratment_type
 * @property $doctor
 * @property $created_at
 * @property $updated_at
 *
 * @property Antecedent $antecedent
 * @property Disease $disease
 * @property Doctor $doctor
 * @property Exam $exam
 * @property MedicalFile[] $medicalFiles
 * @property Patient $patient
 * @property Prescription[] $prescriptions
 * @property SeverityType $severityType
 * @property TreatmentType $treatmentType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultation extends Model
{
    
    static $rules = [
		'consultation_code' => 'required',
		'blood_pressure' => 'required',
		'temperature' => 'required',
		'breathing_frequency' => 'required',
		'heart_rate' => 'required',
		'saturation' => 'required',
		'body_weight' => 'required',
		'body_height' => 'required',
		'time_symptoms' => 'required',
		'physical_exam' => 'required',
		'patient' => 'required',
		'antecedent' => 'required',
		'exam' => 'required',
		'disease' => 'required',
		'severity_type' => 'required',
		'tratment_type' => 'required',
		'doctor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['consultation_code','blood_pressure','temperature','breathing_frequency','heart_rate','saturation','body_weight','body_height','time_symptoms','physical_exam','patient','antecedent','exam','disease','severity_type','tratment_type','doctor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function antecedent()
    {
        return $this->hasOne('App\Models\Antecedent', 'id', 'antecedent');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function disease()
    {
        return $this->hasOne('App\Models\Disease', 'id', 'disease');
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
    public function exam()
    {
        return $this->hasOne('App\Models\Exam', 'id', 'exam');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalFiles()
    {
        return $this->hasMany('App\Models\MedicalFile', 'consultation', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne('App\Models\Patient', 'id', 'patient');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prescriptions()
    {
        return $this->hasMany('App\Models\Prescription', 'consultation', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function severityType()
    {
        return $this->hasOne('App\Models\SeverityType', 'id', 'severity_type');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function treatmentType()
    {
        return $this->hasOne('App\Models\TreatmentType', 'id', 'tratment_type');
    }
    

}

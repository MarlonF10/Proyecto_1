<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prescription
 *
 * @property $id
 * @property $prescription_code
 * @property $medicine
 * @property $dose
 * @property $amount
 * @property $indications
 * @property $duration
 * @property $register_date
 * @property $consultation
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation $consultation
 * @property MedicalFile[] $medicalFiles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prescription extends Model
{
    
    static $rules = [
		'prescription_code' => 'required',
		'medicine' => 'required',
		'dose' => 'required',
		'amount' => 'required',
		'indications' => 'required',
		'duration' => 'required',
		'register_date' => 'required',
		'consultation' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prescription_code','medicine','dose','amount','indications','duration','register_date','consultation'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consultation()
    {
        return $this->hasOne('App\Models\Consultation', 'id', 'consultation');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalFiles()
    {
        return $this->hasMany('App\Models\MedicalFile', 'prescription', 'id');
    }
    

}

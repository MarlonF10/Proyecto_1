<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicalFile
 *
 * @property $id
 * @property $medical_file_code
 * @property $register_date
 * @property $consultation
 * @property $prescription
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation $consultation
 * @property Prescription $prescription
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MedicalFile extends Model
{
    
    static $rules = [
		'medical_file_code' => 'required',
		'register_date' => 'required',
		'consultation' => 'required',
		'prescription' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['medical_file_code','register_date','consultation','prescription'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consultation()
    {
        return $this->hasOne('App\Models\Consultation', 'id', 'consultation');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prescription()
    {
        return $this->hasOne('App\Models\Prescription', 'id', 'prescription');
    }
    

}

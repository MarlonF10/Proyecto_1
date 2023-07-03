<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 *
 * @property $id
 * @property $appointment_code
 * @property $appointment_date
 * @property $next_appointment_date
 * @property $condition
 * @property $register_date
 * @property $patient
 * @property $doctor
 * @property $appointment_time
 * @property $created_at
 * @property $updated_at
 *
 * @property AppointmentTime $appointmentTime
 * @property Doctor $doctor
 * @property Patient $patient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appointment extends Model
{
    
    static $rules = [
		'appointment_code' => 'required',
		'appointment_date' => 'required',
		'next_appointment_date' => 'required',
		'condition' => 'required',
		'register_date' => 'required',
		'patient' => 'required',
		'doctor' => 'required',
		'appointment_time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['appointment_code','appointment_date','next_appointment_date','condition','register_date','patient','doctor','appointment_time'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function appointmentTime()
    {
        return $this->hasOne('App\Models\AppointmentTime', 'id', 'appointment_time');
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
    public function patient()
    {
        return $this->hasOne('App\Models\Patient', 'id', 'patient');
    }
    

}

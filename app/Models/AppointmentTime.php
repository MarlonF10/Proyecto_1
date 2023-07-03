<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AppointmentTime
 *
 * @property $id
 * @property $appointment_time_code
 * @property $day
 * @property $shift
 * @property $star_time
 * @property $finish_time
 * @property $condition
 * @property $doctor
 * @property $created_at
 * @property $updated_at
 *
 * @property Appointment[] $appointments
 * @property Doctor $doctor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AppointmentTime extends Model
{
    
    static $rules = [
		'appointment_time_code' => 'required',
		'day' => 'required',
		'shift' => 'required',
		'star_time' => 'required',
		'finish_time' => 'required',
		'condition' => 'required',
		'doctor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['appointment_time_code','day','shift','star_time','finish_time','condition','doctor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment', 'appointment_time', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'doctor');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 *
 * @property $id
 * @property $name
 * @property $first_name
 * @property $second_name
 * @property $DNI
 * @property $age
 * @property $gender
 * @property $address
 * @property $phone_number
 * @property $email
 * @property $URL_image
 * @property $image_name
 * @property $departament
 * @property $municipality
 * @property $register_date
 * @property $area
 * @property $speciality
 * @property $consulting_room
 * @property $created_at
 * @property $updated_at
 *
 * @property Appointment[] $appointments
 * @property AppointmentTime[] $appointmentTimes
 * @property Area $area
 * @property Consultation[] $consultations
 * @property ConsultingRoom $consultingRoom
 * @property Exam[] $exams
 * @property Speciality $speciality
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctor extends Model
{
    
    static $rules = [
		'name' => 'required',
		'first_name' => 'required',
		'second_name' => 'required',
		'DNI' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'address' => 'required',
		'phone_number' => 'required',
		'email' => 'required',
		'URL_image' => 'required',
		'image_name' => 'required',
		'departament' => 'required',
		'municipality' => 'required',
		'register_date' => 'required',
		'area' => 'required',
		'speciality' => 'required',
		'consulting_room' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','first_name','second_name','DNI','age','gender','address','phone_number','email','URL_image','image_name','departament','municipality','register_date','area','speciality','consulting_room'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment', 'doctor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointmentTimes()
    {
        return $this->hasMany('App\Models\AppointmentTime', 'doctor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'doctor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consultingRoom()
    {
        return $this->hasOne('App\Models\ConsultingRoom', 'id', 'consulting_room');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany('App\Models\Exam', 'doctor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function speciality()
    {
        return $this->hasOne('App\Models\Speciality', 'id', 'speciality');
    }
    

}

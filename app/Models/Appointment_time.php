<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment_time extends Model
{
    protected $table= 'appointment_times';
    protected $fillable = [
        'id','appointment_time_code','day','shift','star_time','finish_time','condition','id_doctor'
    ];
    public function Doctor()
    {
     return $this->hasOne(Doctor::class);
    }

    public function Appointment()
    {
     return $this->hasOne(Appointment::class);
    }
}

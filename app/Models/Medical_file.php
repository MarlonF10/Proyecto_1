<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_file extends Model
{
    protected $table= 'medical_files';
    protected $fillable = [
        'id','medical_file_code','register_date','id_consultation','id_prescription'
    ];
    public function Consultation()
    {
     return $this->hasOne(Consultation::class);
    }

    public function Prescription()
    {
     return $this->hasOne(Prescription::class);
    }
}

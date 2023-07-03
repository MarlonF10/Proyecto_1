<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_type extends Model
{
    protected $table= 'exam_types';
    protected $fillable = [
        'id','exam_type_code','exam_type','concept','register_date'
    ];
    public function Exam()
    {
     return $this->hasOne(Exam::class);
    }
}

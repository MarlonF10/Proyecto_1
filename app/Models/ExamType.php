<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamType
 *
 * @property $id
 * @property $exam_type_code
 * @property $exam_type
 * @property $concept
 * @property $register_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Exam[] $exams
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ExamType extends Model
{
    
    static $rules = [
		'exam_type_code' => 'required',
		'exam_type' => 'required',
		'concept' => 'required',
		'register_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['exam_type_code','exam_type','concept','register_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany('App\Models\Exam', 'exam_type', 'id');
    }
    

}

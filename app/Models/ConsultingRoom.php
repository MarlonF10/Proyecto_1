<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConsultingRoom
 *
 * @property $id
 * @property $consulting_room_code
 * @property $consulting_room_number
 * @property $concept
 * @property $condition
 * @property $register_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor[] $doctors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConsultingRoom extends Model
{
    
    static $rules = [
		'consulting_room_code' => 'required',
		'consulting_room_number' => 'required',
		'concept' => 'required',
		'condition' => 'required',
		'register_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['consulting_room_code','consulting_room_number','concept','condition','register_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor', 'consulting_room', 'id');
    }
    

}

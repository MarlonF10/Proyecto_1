<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 *
 * @property $id
 * @property $business_name
 * @property $RUC
 * @property $address
 * @property $phone_number
 * @property $email
 * @property $register_date
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Setting extends Model
{
    
    static $rules = [
		'business_name' => 'required',
		'RUC' => 'required',
		'address' => 'required',
		'phone_number' => 'required',
		'email' => 'required',
		'register_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['business_name','RUC','address','phone_number','email','register_date'];



}

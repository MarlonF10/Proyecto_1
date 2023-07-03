<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrator
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
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Administrator extends Model
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
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','first_name','second_name','DNI','age','gender','address','phone_number','email','URL_image','image_name','departament','municipality','register_date'];



}

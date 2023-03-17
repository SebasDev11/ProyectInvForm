<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $id_Region
 * @property $firstName
 * @property $LastName
 * @property $dni
 * @property $email
 * @property $telefono
 * @property $date_at
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Region $region
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'id_Region' => 'required',
		'firstName' => 'required',
		'LastName' => 'required',
		'dni' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'date_at' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Region','firstName','LastName','dni','email','telefono','date_at','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region()
    {
        return $this->hasOne('App\Models\Region', 'id', 'id_Region');
    }
    

}

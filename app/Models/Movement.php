<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movement
 *
 * @property $id
 * @property $id_type_movement
 * @property $amount
 * @property $date
 * @property $id_account
 * @property $id_city
 *
 * @property Account $account
 * @property City $city
 * @property TypeMovement $typeMovement
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movement extends Model
{
    
    static $rules = [
		'amount' => 'required',
		'id_account' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_type_movement','amount','date','id_account','id_city'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function account()
    {
        return $this->hasOne('App\Models\Account', 'id', 'id_account');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasOne('App\Models\City', 'id', 'id_city');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeMovement()
    {
        return $this->hasOne('App\Models\TypeMovement', 'id', 'id_type_movement');
    }
    

}

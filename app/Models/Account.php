<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Account
 *
 * @property $id
 * @property $id_type_account
 * @property $number_account
 * @property $balance
 * @property $id_client
 * @property $id_city
 *
 * @property City $city
 * @property Client $client
 * @property Movement[] $movements
 * @property TypeAccount $typeAccount
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Account extends Model
{
    
    static $rules = [
		'number_account' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_type_account','number_account','balance','id_client','id_city'];


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
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_client');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movements()
    {
        return $this->hasMany('App\Models\Movement', 'id_account', 'id')->latest()->limit(10);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeAccount()
    {
        return $this->hasOne('App\Models\TypeAccount', 'id', 'id_type_account');
    }
    

}

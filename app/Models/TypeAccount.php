<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeAccount
 *
 * @property $id
 * @property $name
 *
 * @property Account[] $accounts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TypeAccount extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany('App\Models\Account', 'id_type_account', 'id');
    }
    

}

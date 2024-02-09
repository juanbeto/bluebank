<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeMovement
 *
 * @property $id
 * @property $sign
 * @property $name
 *
 * @property Movement[] $movements
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TypeMovement extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sign','name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movements()
    {
        return $this->hasMany('App\Models\Movement', 'id_type_movement', 'id');
    }
    

}

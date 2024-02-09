<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeDocument
 *
 * @property $id
 * @property $name
 *
 * @property Client[] $clients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TypeDocument extends Model
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
    public function clients()
    {
        return $this->hasMany('App\Models\Client', 'id_type_document', 'id');
    }
    

}

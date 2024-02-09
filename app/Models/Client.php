<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $id_type_document
 * @property $number_document
 * @property $first_name
 * @property $last_name
 * @property $updated_at
 * @property $created_at
 *
 * @property Account[] $accounts
 * @property TypeDocument $typeDocument
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'number_document' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_type_document','number_document','first_name','last_name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany('App\Models\Account', 'id_client', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeDocument()
    {
        return $this->hasOne('App\Models\TypeDocument', 'id', 'id_type_document');
    }
    

}

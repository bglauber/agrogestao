<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fabricantes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome_fabricante', 'obs_fabricante'];

    
}

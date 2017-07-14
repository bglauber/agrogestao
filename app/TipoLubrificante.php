<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoLubrificante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipo_lubrificantes';

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
    protected $fillable = ['tipo_lubrificante', 'dsc_tipo_lubrificante'];

    
}

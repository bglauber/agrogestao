<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'veiculos';

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
    protected $fillable = ['nome_veiculo', 'id_tipo_veiculo', 'id_fabricante_veiculo', 'modelo_veiculo', 'chassi_veiculo', 'renavam_veiculo', 'ano_fabricacao_veiculo', 'ano_modelo_veiculo', 'valor_aquisicao_veiculo', 'valor_atual_veiculo', 'dsc_veiculo'];

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pedidos
 * @package App\Models
 * @version June 30, 2019, 11:15 pm UTC
 *
 * @property integer produto_id
 * @property integer qtd_pedida
 * @property string data_pedido
 * @property string solicitante
 * @property string solicitante_cep
 * @property string solicitante_uf
 * @property string solicitante_municipio
 * @property string solicitante_bairro
 * @property string solicitante_rua
 * @property string solicitante_numero
 * @property string solicitante_complemento
 * @property string despachante
 * @property string situacao
 */
class pedidos extends Model
{
    use SoftDeletes;

    public $table = 'pedidos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'produto_id',
        'qtd_pedida',
        'data_pedido',
        'solicitante',
        'solicitante_cep',
        'solicitante_uf',
        'solicitante_municipio',
        'solicitante_bairro',
        'solicitante_rua',
        'solicitante_numero',
        'solicitante_complemento',
        'despachante',
        'situacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'produto_id' => 'integer',
        'qtd_pedida' => 'integer',
        'data_pedido' => 'date',
        'solicitante' => 'string',
        'solicitante_cep' => 'string',
        'solicitante_uf' => 'string',
        'solicitante_municipio' => 'string',
        'solicitante_bairro' => 'string',
        'solicitante_rua' => 'string',
        'solicitante_numero' => 'string',
        'solicitante_complemento' => 'string',
        'despachante' => 'string',
        'situacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'produto_id' => 'required',
        'qtd_pedida' => 'required',
        'data_pedido' => 'required',
        'solicitante' => 'required',
        'solicitante_cep' => 'required',
        'solicitante_uf' => 'required',
        'solicitante_municipio' => 'required',
        'solicitante_bairro' => 'required',
        'solicitante_rua' => 'required',
        'solicitante_numero' => 'required',
        'despachante' => 'required',
        'situacao' => 'required'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function produto()
    {
        return $this->BelongsTo('App\Models\produtos');
    }
}

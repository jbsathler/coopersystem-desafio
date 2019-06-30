<?php

namespace App\Repositories;

use App\Models\pedidos;
use App\Repositories\BaseRepository;

/**
 * Class pedidosRepository
 * @package App\Repositories
 * @version June 30, 2019, 11:15 pm UTC
*/

class pedidosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pedidos::class;
    }
}

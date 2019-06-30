<?php

namespace App\Repositories;

use App\Models\produtos;
use App\Repositories\BaseRepository;

/**
 * Class produtosRepository
 * @package App\Repositories
 * @version June 30, 2019, 4:31 am UTC
*/

class produtosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'valor_unitario',
        'qtd_estoque'
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
        return produtos::class;
    }
}

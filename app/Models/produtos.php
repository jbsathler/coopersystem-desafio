<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class produtos
 * @package App\Models
 * @version June 30, 2019, 4:31 am UTC
 *
 * @property string nome
 * @property float valor_unitario
 * @property integer qtd_estoque
 */
class produtos extends Model
{
    use SoftDeletes;

    public $table = 'produtos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'valor_unitario',
        'qtd_estoque'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'valor_unitario' => 'float',
        'qtd_estoque' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'valor_unitario' => 'required',
        'qtd_estoque' => 'required'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function pedido()
    {
        return $this->hasOne('App\Models\pedidos');
    }
}

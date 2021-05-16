<?php namespace JoaoCason\Ppg\Models;

use Illuminate\Support\Collection;
use Model;

/**
 * Model
 */
class Marcas extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'joaocason_ppg_marcas';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'titulo' => ['required'],
        'slug' => ['required'],
        'categorias' => ['required'],
        'tipo_cores' => ['required'],
    ];

    public $belongsToMany = [
        'categorias' => [
            '\JoaoCason\Ppg\Models\Categorias',
            'table' => 'joaocason_ppg_categorias_marcas'
        ],
        'tipo_cores' => [
            '\JoaoCason\Ppg\Models\TipoCores',
            'table' => 'joaocason_ppg_tipos_cores_marcas'
        ]
    ];

    public static function obterMarcasPorCategoria(int $id_categoria): Collection
    {
        return Marcas::with([
                'tipo_cores',
                'categorias' => function($q) use ($id_categoria) {
                    $q->where('categorias_id', $id_categoria);
                }
            ])
            ->get()
            ->filter(function($marca) {
                return $marca->categorias->count() > 0;
            });
    }
}

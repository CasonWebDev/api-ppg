<?php namespace JoaoCason\Ppg\Models;

use Illuminate\Http\Request;
use Model;

/**
 * Model
 */
class Cores extends Model
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
    public $table = 'joaocason_ppg_cores';

    protected $casts = [
        'tipo_cor' => 'string',
        'marca' => 'string',
        'categoria' => 'string'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'cor' => ['required'],
        'modelo' => ['required'],
        'tipo_cores_id' => ['required'],
        'marcas_id' => ['required'],
        'categorias_id' => ['required'],
        'textura' => ['required'],
    ];

    public $attachOne = [
        'textura' => 'System\Models\File'
    ];

    public function getMarcasIdOptions(): array
    {
        return Marcas::all()->pluck('titulo', 'id')->all();
    }

    public function getTipoCoresIdOptions(): array
    {
        if ($this->marcas_id) {
            return Marcas::find($this->marcas_id)->tipo_cores->pluck('titulo', 'id')->all();
        }

        return [];
    }

    public function getCategoriasIdOptions(): array
    {
        if ($this->marcas_id) {
            return Marcas::find($this->marcas_id)->categorias->pluck('titulo', 'id')->all();
        }

        return [];
    }

    public function getTipoCorAttribute(): string
    {
        return TipoCores::find($this->tipo_cores_id)->titulo;
    }

    public function getMarcaAttribute(): string
    {
        return Marcas::find($this->marcas_id)->titulo;
    }

    public function getCategoriaAttribute(): string
    {
        return Categorias::find($this->categorias_id)->titulo;
    }

    public static function obterCoresPorRequest(Request $request)
    {
        return Cores::with('textura')->where([
                'tipo_cores_id' => $request->tipo_cor_id,
                'marcas_id' => $request->marca_id,
                'categorias_id' => $request->categoria_id
            ])
            ->get()
            ->map(function($cor) {
                return [
                    'id' => $cor->id,
                    'cor' => $cor->cor,
                    'modelo' => $cor->modelo,
                    'textura' => $cor->textura->path
                ];
            });
    }

    public static function obterCoresPorTermo(string $termo)
    {
        return Cores::with('textura')
            ->where('cor', 'like', "%$termo%")
            ->orWhere('modelo', 'like', "%$termo%")
            ->get()
            ->map(function($cor) {
                return [
                    'id' => $cor->id,
                    'cor' => $cor->cor,
                    'modelo' => $cor->modelo,
                    'textura' => $cor->textura->path
                ];
            });
    }
}

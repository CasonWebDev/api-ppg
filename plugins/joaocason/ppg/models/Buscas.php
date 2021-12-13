<?php namespace JoaoCason\Ppg\Models;

use Model;

/**
 * Model
 */
class Buscas extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'joaocason_ppg_buscas';

    public $fillable = [
        'termo',
        'buscas'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

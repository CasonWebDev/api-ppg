<?php namespace JoaoCason\Ppg\Controllers;

use Backend\Classes\Controller;
use JoaoCason\Ppg\Models\Marcas as MarcasModel;
use BackendMenu;

class Marcas extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'PPGMarcas'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function index(int $id_categoria)
    {
        $marcas = MarcasModel::obterMarcasPorCategoria($id_categoria);

        return response()->json($marcas);
    }
}

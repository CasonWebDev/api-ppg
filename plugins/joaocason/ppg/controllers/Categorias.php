<?php namespace JoaoCason\Ppg\Controllers;

use JoaoCason\Ppg\Models\Categorias as CategoriasModel;
use Backend\Classes\Controller;
use BackendMenu;

class Categorias extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'PPGCategorias'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $categorias = CategoriasModel::with('icone')->get();

        $categorias = $categorias->map(function($categoria) {
            return [
                'id' => $categoria->id,
                'titulo' => $categoria->titulo,
                'icone' => $categoria->icone->path
            ];
        });

        return response()->json($categorias);
    }

}

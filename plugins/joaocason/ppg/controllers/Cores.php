<?php namespace JoaoCason\Ppg\Controllers;

use Backend\Classes\Controller;
use Illuminate\Http\Request;
use JoaoCason\Ppg\Models\Cores as CoresModel;
use BackendMenu;

class Cores extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'PPGCores'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function obterCores(Request $request)
    {
        $cores = CoresModel::obterCoresPorRequest($request);

        return response()->json($cores);
    }
}

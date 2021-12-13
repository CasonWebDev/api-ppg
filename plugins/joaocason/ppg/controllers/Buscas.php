<?php namespace JoaoCason\Ppg\Controllers;

use Backend\Classes\Controller;
use Illuminate\Http\Request;
use JoaoCason\Ppg\Models\Cores as CoresModel;
use JoaoCason\Ppg\Models\Buscas as BuscasModel;
use Maatwebsite\Excel\Facades\Excel;
use JoaoCason\Ppg\Exports\BuscaExport;
use BackendMenu;
use Backend;

class Buscas extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'PPGBuscas' 
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function buscarCores(Request $request)
    {
        $cores = CoresModel::obterCoresPorTermo($request->termo);

        $this->registrarBusca($request->termo);

        return response()->json($cores);
    }

    private function registrarBusca(string $termo)
    {
        $quantidadeBuscas = 1;
        $buscarTermo = BuscasModel::where('termo', $termo)->first();

        if($buscarTermo){
            $quantidadeBuscas = $buscarTermo->buscas + 1;
        }

        BuscasModel::updateOrCreate(
            ['termo' => $termo],
            ['buscas' => $quantidadeBuscas]
        );
    }

    public function onExport()
    {
        return Backend::redirect('joaocason/ppg/buscas/exportar-buscas');
    }

    public function exportarBuscas()
    {
        try {
            return Excel::download(new BuscaExport, 'buscas.xlsx');
        }
        catch (Exception $ex) {
            $this->handleError($ex);
        }
    }
}

<?php 

namespace JoaoCason\Ppg\Exports;

use JoaoCason\Ppg\Models\Buscas as BuscasModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BuscaExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            '#',
            'Termo',
            'Quantidade de Buscas',
            'Data Primeira Busca',
            'Data Última Busca'
        ];
    }

    public function collection()
    {
        return BuscasModel::all();
    }
}
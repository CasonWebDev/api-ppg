<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJoaocasonPpgTiposCoresMarcas extends Migration
{
    public function up()
    {
        Schema::rename('joaocason_ppg_marcas_tipos_cores', 'joaocason_ppg_tipos_cores_marcas');
    }
    
    public function down()
    {
        Schema::rename('joaocason_ppg_tipos_cores_marcas', 'joaocason_ppg_marcas_tipos_cores');
    }
}

<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJoaocasonPpgTiposCoresMarcas2 extends Migration
{
    public function up()
    {
        Schema::table('joaocason_ppg_tipos_cores_marcas', function($table)
        {
            $table->renameColumn('tipos_cores_id', 'tipo_cores_id');
        });
    }
    
    public function down()
    {
        Schema::table('joaocason_ppg_tipos_cores_marcas', function($table)
        {
            $table->renameColumn('tipo_cores_id', 'tipos_cores_id');
        });
    }
}

<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJoaocasonPpgMarcasTiposCores extends Migration
{
    public function up()
    {
        Schema::create('joaocason_ppg_marcas_tipos_cores', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('marcas_id')->unsigned();
            $table->integer('tipos_cores_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joaocason_ppg_marcas_tipos_cores');
    }
}

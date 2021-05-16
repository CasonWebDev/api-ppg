<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJoaocasonPpgCores extends Migration
{
    public function up()
    {
        Schema::create('joaocason_ppg_cores', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('cor');
            $table->string('modelo');
            $table->integer('tipo_cores_id');
            $table->integer('marcas_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joaocason_ppg_cores');
    }
}

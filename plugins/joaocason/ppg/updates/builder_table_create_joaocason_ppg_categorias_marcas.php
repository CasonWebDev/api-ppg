<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJoaocasonPpgCategoriasMarcas extends Migration
{
    public function up()
    {
        Schema::create('joaocason_ppg_categorias_marcas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('categorias_id')->unsigned();
            $table->integer('marcas_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joaocason_ppg_categorias_marcas');
    }
}

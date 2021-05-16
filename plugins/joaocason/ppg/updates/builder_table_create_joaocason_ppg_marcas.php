<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJoaocasonPpgMarcas extends Migration
{
    public function up()
    {
        Schema::create('joaocason_ppg_marcas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titulo');
            $table->string('slug');
            $table->integer('categorias_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joaocason_ppg_marcas');
    }
}

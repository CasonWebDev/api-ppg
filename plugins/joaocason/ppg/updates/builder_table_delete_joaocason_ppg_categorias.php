<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteJoaocasonPpgCategorias extends Migration
{
    public function up()
    {
        Schema::dropIfExists('joaocason_ppg_categorias');
    }
    
    public function down()
    {
        Schema::create('joaocason_ppg_categorias', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titulo', 191);
            $table->string('slug', 191);
            $table->string('icone', 191);
        });
    }
}

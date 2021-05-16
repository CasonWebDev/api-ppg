<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJoaocasonPpgTipoCores extends Migration
{
    public function up()
    {
        Schema::create('joaocason_ppg_tipo_cores', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titulo');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joaocason_ppg_tipo_cores');
    }
}

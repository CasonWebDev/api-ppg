<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJoaocasonPpgBuscas extends Migration
{
    public function up()
    {
        Schema::create('joaocason_ppg_buscas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('termo');
            $table->bigInteger('buscas');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joaocason_ppg_buscas');
    }
}

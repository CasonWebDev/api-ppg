<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJoaocasonPpgMarcas extends Migration
{
    public function up()
    {
        Schema::table('joaocason_ppg_marcas', function($table)
        {
            $table->dropColumn('categorias_id');
        });
    }
    
    public function down()
    {
        Schema::table('joaocason_ppg_marcas', function($table)
        {
            $table->integer('categorias_id');
        });
    }
}

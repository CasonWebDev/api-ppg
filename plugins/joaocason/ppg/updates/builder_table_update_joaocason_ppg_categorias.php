<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJoaocasonPpgCategorias extends Migration
{
    public function up()
    {
        Schema::table('joaocason_ppg_categorias', function($table)
        {
            $table->string('icone');
        });
    }
    
    public function down()
    {
        Schema::table('joaocason_ppg_categorias', function($table)
        {
            $table->dropColumn('icone');
        });
    }
}

<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJoaocasonPpgCores4 extends Migration
{
    public function up()
    {
        Schema::table('joaocason_ppg_cores', function($table)
        {
            $table->integer('tipo_cor_id');
            $table->integer('marca_id');
            $table->integer('categoria_id');
            $table->dropColumn('tipo_cor');
            $table->dropColumn('marca');
            $table->dropColumn('categoria');
        });
    }
    
    public function down()
    {
        Schema::table('joaocason_ppg_cores', function($table)
        {
            $table->dropColumn('tipo_cor_id');
            $table->dropColumn('marca_id');
            $table->dropColumn('categoria_id');
            $table->integer('tipo_cor');
            $table->integer('marca');
            $table->integer('categoria');
        });
    }
}

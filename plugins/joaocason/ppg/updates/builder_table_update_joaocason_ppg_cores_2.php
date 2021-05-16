<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJoaocasonPpgCores2 extends Migration
{
    public function up()
    {
        Schema::table('joaocason_ppg_cores', function($table)
        {
            $table->integer('tipo_cor_id');
            $table->integer('marca_id');
            $table->integer('categoria_id');
            $table->dropColumn('tipo_cores_id');
            $table->dropColumn('marcas_id');
            $table->dropColumn('categorias_id');
        });
    }
    
    public function down()
    {
        Schema::table('joaocason_ppg_cores', function($table)
        {
            $table->dropColumn('tipo_cor_id');
            $table->dropColumn('marca_id');
            $table->dropColumn('categoria_id');
            $table->integer('tipo_cores_id');
            $table->integer('marcas_id');
            $table->integer('categorias_id');
        });
    }
}

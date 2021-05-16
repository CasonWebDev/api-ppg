<?php namespace JoaoCason\Ppg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJoaocasonPpgCores extends Migration
{
    public function up()
    {
        Schema::table('joaocason_ppg_cores', function($table)
        {
            $table->integer('categorias_id');
        });
    }
    
    public function down()
    {
        Schema::table('joaocason_ppg_cores', function($table)
        {
            $table->dropColumn('categorias_id');
        });
    }
}

<?php namespace Lacasita\Acciones\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLacasitaAccionesAcciones extends Migration
{
    public function up()
    {
        Schema::table('lacasita_acciones_acciones', function($table)
        {
            $table->smallInteger('order');
        });
    }
    
    public function down()
    {
        Schema::table('lacasita_acciones_acciones', function($table)
        {
            $table->dropColumn('order');
        });
    }
}

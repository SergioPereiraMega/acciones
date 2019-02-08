<?php namespace Lacasita\Acciones\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLacasitaAccionesColaboradores extends Migration
{
    public function up()
    {
        Schema::create('lacasita_acciones_colaboradores', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('publish');
            $table->smallInteger('order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lacasita_acciones_colaboradores');
    }
}

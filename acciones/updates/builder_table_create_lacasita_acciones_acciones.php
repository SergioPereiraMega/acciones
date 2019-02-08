<?php namespace Lacasita\Acciones\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLacasitaAccionesAcciones extends Migration
{
    public function up()
    {
        Schema::create('lacasita_acciones_acciones', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->date('date');
            $table->string('adress')->nullable();
            $table->boolean('publish');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lacasita_acciones_acciones');
    }
}

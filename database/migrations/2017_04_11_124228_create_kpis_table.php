<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpis', function (Blueprint $table){

            $table->increments('id')->unsigned();
            $table->string('name',50);
            $table->string('text',50);
            $table->string('symbol',5);
            $table->unsignedInteger('time');
            $table->string('color',50);
            $table->string('icon',50);
            $table->TinyInteger('estado_id',false,true);

            // creando relaciones:
            $table->foreign('estado_id')
                ->references('id')
                ->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kpis');
    }
}

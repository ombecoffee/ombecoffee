<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelamarTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pelamar';

    /**
     * Run the migrations.
     * @table pelamar
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpelamar');
            $table->unsignedInteger('idstore');
            $table->string('nama', 45)->nullable();
            $table->string('posisi', 45)->nullable();
            $table->unsignedInteger('careers_idcareers');
            $table->string('email', 45)->nullable();

            $table->index(["idstore"], 'fk_table1_store1_idx');

            $table->index(["careers_idcareers"], 'fk_pelamar_careers1_idx');


            $table->foreign('idstore', 'fk_table1_store1_idx')
                ->references('id_store')->on('store')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('careers_idcareers', 'fk_pelamar_careers1_idx')
                ->references('idcareers')->on('careers')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

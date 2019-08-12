<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'jadwal';

    /**
     * Run the migrations.
     * @table jadwal
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idjadwal');
            $table->string('hari', 45)->nullable();
            $table->date('jam_buka')->nullable();
            $table->date('jam_tutup')->nullable();
            $table->unsignedInteger('store_id_store');

            $table->index(["store_id_store"], 'fk_jadwal_store1_idx');


            $table->foreign('store_id_store', 'fk_jadwal_store1_idx')
                ->references('id_store')->on('store')
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

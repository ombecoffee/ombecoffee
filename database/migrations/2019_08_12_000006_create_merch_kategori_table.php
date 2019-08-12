<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchKategoriTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'merch_kategori';

    /**
     * Run the migrations.
     * @table merch_kategori
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idmerch');
            $table->string('merch_name', 45)->nullable();
            $table->unsignedInteger('users_id');

            $table->index(["users_id"], 'fk_merch_kategori_user1_idx');


            $table->foreign('users_id', 'fk_merch_kategori_user1_idx')
                ->references('id')->on('users')
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

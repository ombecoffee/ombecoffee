<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'merch';

    /**
     * Run the migrations.
     * @table merch
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idmerch');
            $table->string('nm_kategori', 45)->nullable();
            $table->string('pic', 45)->nullable();
            $table->integer('stok')->nullable();
            $table->unsignedInteger('idmerch_kategori');
            $table->integer('harga')->nullable();

            $table->index(["idmerch_kategori"], 'fk_merch_kategori_merch1_idx');


            $table->foreign('idmerch_kategori', 'fk_merch_kategori_merch1_idx')
                ->references('idmerch')->on('merch_kategori')
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

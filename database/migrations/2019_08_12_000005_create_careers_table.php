<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'careers';

    /**
     * Run the migrations.
     * @table careers
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idcareers');
            $table->string('title', 45)->nullable();
            $table->string('posisi', 45)->nullable();
            $table->unsignedInteger('store_id_store');
            $table->unsignedInteger('users_id');

            $table->index(["users_id"], 'fk_careers_user1_idx');

            $table->index(["store_id_store"], 'fk_careers_store_idx');


            $table->foreign('store_id_store', 'fk_careers_store_idx')
                ->references('id_store')->on('store')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_careers_user1_idx')
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

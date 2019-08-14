<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'coffee';

    /**
     * Run the migrations.
     * @table coffe
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idcoffe');
            $table->string('coffe_name', 45)->nullable();
            $table->string('pict', 45)->nullable();
            $table->unsignedInteger('users_id');

            $table->index(["users_id"], 'fk_coffee_user1_idx');


            $table->foreign('users_id', 'fk_coffee_user1_idx')
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientDatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_databases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->string('service_name');
            // $table->string('token')->unique();
            $table->string('db_connection');
            $table->string('db_driver');
            $table->string('db_host');
            $table->string('db_port');
            $table->string('db_database');
            $table->string('db_username');
            $table->string('db_password');
            $table->string('db_prefix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_settings');
    }
}

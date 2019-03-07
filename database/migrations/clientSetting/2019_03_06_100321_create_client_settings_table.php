<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_settings', function (Blueprint $table) {
            $table->increments('client_id');
            $table->string('client_name');
            $table->string('client_token')->unique();
            $table->string('client_service');
            $table->string('client_db_connection');
            $table->string('client_db_driver');
            $table->string('client_db_host');
            $table->string('client_db_port');
            $table->string('client_db_database');
            $table->string('client_db_username');
            $table->string('client_db_password');
            $table->string('client_db_prefix');
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

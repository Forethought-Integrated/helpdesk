<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cards', function (Blueprint $table) {
				$table->increments('card_id');
				$table->integer('list_id');
				$table->string('card_name');
				$table->string('card_description')->nullable();
				$table->string('card_order');
				$table->string('card_members');
				$table->string('card_archieved')->nullable();
				$table->string('card_comment')->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('cards');
	}
}

<?php
/**
 * Created by PhpStorm.
 * User: misha
 * Date: 28.10.17
 * Time: 14:23
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_categories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('new_ticket_id')->unsigned()->default(1);

            $table->foreign('new_ticket_id')->references('id')->on('new_tickets')->onDelete('cascade');;

            $table->integer('categories_list_id')->unsigned()->default(1);

            $table->foreign('categories_list_id')->references('id')->on('categories_lists');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_categories');
    }
}
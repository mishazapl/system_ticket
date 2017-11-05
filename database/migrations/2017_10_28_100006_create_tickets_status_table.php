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

class CreateTicketsStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets_status', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('ticket_id')->unsigned();


            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');


            $table->integer('status_id')->unsigned();

            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets_status');
    }
}
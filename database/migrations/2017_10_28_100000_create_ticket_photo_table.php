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

class CreateTicketPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_photo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket');
            $table->string('link');
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
        Schema::dropIfExists('ticket_photo');
    }
}
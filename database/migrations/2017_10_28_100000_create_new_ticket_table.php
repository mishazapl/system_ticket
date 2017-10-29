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

class CreateNewTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('theme');
            $table->string('message');
            $table->integer('status');
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
        Schema::dropIfExists('new_ticket');
    }
}

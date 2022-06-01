<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('temps_attente');
            $table->timestamp('date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('request_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('request_id')->references('id')->on('requesteds')->onDelete('restrict');
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
        Schema::dropIfExists('responses');
    }
}

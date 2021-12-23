<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_store', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('description',4000);
            $table->string('user',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->string('applicationKey',255);
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
        Schema::dropIfExists('tbl_store');
    }
}

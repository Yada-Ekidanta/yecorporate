<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_chat_favorites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('client_chat_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
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
        
    }
};

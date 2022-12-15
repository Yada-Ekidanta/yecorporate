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
            $table->integer('client_id');
            $table->integer('favorite_id');
            $table->timestamps();
        });
        Schema::create('client_chat_messages', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->bigInteger('from_id');
            $table->bigInteger('to_id');
            $table->longText('body');
            $table->longText('attachment');
            $table->tinyInteger('seen');
            $table->timestamps();
        });
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->longText('message');
            $table->timestamps();
        });
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('to');
            $table->string('subject');
            $table->string('attachment')->nullable();
            $table->longText('body');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
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

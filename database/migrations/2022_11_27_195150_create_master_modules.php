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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->boolean('is_activated');
            $table->string('thumbnail')->nullable();
            $table->softDeletes();
        });
        Schema::create('days', function (Blueprint $table) {
            $table->id();
        });
        Schema::create('isic_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();
        });
        Schema::create('isics', function (Blueprint $table) {
            $table->id();
            $table->integer('isic_type_id')->default(0);
            $table->string('code');
            $table->string('name');
            $table->softDeletes();
        });
        Schema::create('mail_configs', function (Blueprint $table) {
            $table->id();
            $table->string('driver');
            $table->string('host');
            $table->string('port');
            $table->string('from_address');
            $table->string('from_name');
            $table->string('encryption');
            $table->string('username');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
};

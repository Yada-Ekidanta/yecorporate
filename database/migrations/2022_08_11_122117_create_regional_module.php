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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->softDeletes();
        });
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->string('name');
            $table->string('postcode')->nullable();
            $table->softDeletes();
        });
        Schema::create('regencies', function (Blueprint $table) {
            $table->id();
            $table->integer('province_id');
            $table->string('name');
            $table->string('postcode')->nullable();
            $table->softDeletes();
        });
        Schema::create('districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('regency_id');
            $table->string('name');
            $table->string('postcode')->nullable();
            $table->softDeletes();
        });
        Schema::create('villages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('district_id');
            $table->string('name');
            $table->string('postcode')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('regencies');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('villages');
    }
};

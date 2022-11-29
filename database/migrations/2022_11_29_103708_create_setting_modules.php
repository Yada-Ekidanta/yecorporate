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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('web_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('company_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->default(0);
            $table->string('name');
            $table->longText('address');
            $table->longText('instruction')->nullable();
            $table->integer('province_id')->default(0);
            $table->integer('regency_id')->default(0);
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('village_id')->default(0);
            $table->string('postcode',5)->nullable();
            $table->boolean('is_primary');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('company_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('bank_id')->default(0);
            $table->integer('company_id')->default(0);
            $table->string('account_number')->unique();
            $table->integer('branch_name')->default(0);
            $table->boolean('is_primary');
            $table->softDeletes();
        });
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->softDeletes();
        });
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('year',4)->nullable();
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
        Schema::dropIfExists('companies');
    }
};

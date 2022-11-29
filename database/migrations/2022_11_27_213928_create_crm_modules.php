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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('contact_group_id')->default(0);
            $table->integer('company_industry_id')->default(0)->comment('select option');
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('username',30)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address')->nullable();
            $table->integer('country_id')->default(0);
            $table->integer('province_id')->default(0);
            $table->integer('regency_id')->default(0);
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('village_id')->default(0);
            $table->string('postcode',5)->nullable();
            $table->string('password')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('url')->nullable();
            $table->string('paypal')->nullable();
            $table->string('google_id')->nullable();
            $table->enum('type',['Client','Customer','Partner'])->nullable();
            $table->enum('category',['Offline','Online'])->nullable();
            $table->enum('st',['Active','Non Active'])->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('clients');
    }
};

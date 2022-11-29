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
        Schema::create('day_offs', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->date('date');
            $table->string('amount',1);
            $table->longText('reason')->nullable();
            $table->enum('st',['Pending','Approved','Denied'])->nullable();
            $table->integer('verified_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('desc')->nullable();
            $table->softDeletes();
        });
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->default(0);
            $table->string('nip',20)->unique()->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->enum('gender',['M','F'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('place_birth')->nullable();
            $table->date('date_birth')->nullable();
            $table->longText('jobdesc')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('impression')->nullable();
            $table->longText('address')->nullable();
            $table->integer('country_id')->default(0);
            $table->integer('province_id')->default(0);
            $table->integer('regency_id')->default(0);
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('village_id')->default(0);
            $table->string('postcode',5)->nullable();
            $table->integer('department_id')->default(0);
            $table->integer('position_id')->default(0);
            $table->string('avatar')->nullable();
            $table->string('cv')->nullable();
            $table->string('google_id')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('paypal')->nullable();
            $table->string('password')->nullable();
            $table->string('st',1)->nullable();
            $table->rememberToken();
            $table->timestamp('last_seen')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->longText('name');
            $table->longText('description')->nullable();
            $table->string('type')->nullable();
            $table->longText('url')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->default(0);
            $table->string('name');
            $table->longText('desc')->nullable();
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
        Schema::dropIfExists('day_offs');
    }
};

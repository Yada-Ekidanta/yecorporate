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
        Schema::create('company_branches', function (Blueprint $table) {
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
            $table->integer('company_branch_id')->default(0);
            $table->string('name')->default('-');
            $table->integer('bank_id')->default(0);
            $table->string('account_number')->unique()->default(0);
            $table->string('opening_balance')->default(0);
            $table->string('branch_name')->default('-');
            $table->boolean('is_primary');
            $table->softDeletes();
        });
        Schema::create('company_industries', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
            $table->string('name');
            $table->softDeletes();
        });
        Schema::create('company_policies', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
            $table->string('title');
            $table->longText('desc');
            $table->string('attachment');
            $table->softDeletes();
        });
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('year',4)->nullable();
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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('position_id')->default(0);
            $table->string('name');
            $table->string('entity_type');
            $table->string('group_by');
            $table->string('chart_type');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->softDeletes();
        });
        Schema::create('streams', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('log_type');
            $table->string('file_upload');
            $table->longText('remark');
            $table->integer('created_by')->default(0);
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
        Schema::dropIfExists('companies');
        Schema::dropIfExists('company_addresses');
        Schema::dropIfExists('company_bank_accounts');
        Schema::dropIfExists('company_industries');
        Schema::dropIfExists('services');
        Schema::dropIfExists('histories');
    }
};

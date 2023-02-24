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
        Schema::create('allowance_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('purchase_at');
            $table->date('supported_at');
            $table->string('amount');
            $table->longText('desc');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('award_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->boolean('is_activated');
            $table->string('thumbnail')->nullable();
            $table->softDeletes();
        });
        Schema::create('campaign_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('case_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('client_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('client_contract_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('competencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('performance_type_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('days', function (Blueprint $table) {
            $table->id();
        });
        Schema::create('deduction_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
            $table->string('name');
            $table->longText('desc')->nullable();
            $table->softDeletes();
        });
        Schema::create('leave_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('days');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('document_folders', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('name');
            $table->string('parent');
            $table->longText('desc');
            $table->timestamps();
        });
        Schema::create('document_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('is_required');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('document_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_contract_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('expense_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->softDeletes();
        });
        Schema::create('goal_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('income_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
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
        Schema::create('job_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('job_stages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('order')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('lead_sources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('loan_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('opportunities_stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('payment_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('payslip_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('performance_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->default(0);
            $table->string('name');
            $table->longText('desc')->nullable();
            $table->softDeletes();
        });
        Schema::create('product_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('color');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('shipping_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nick');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('target_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('task_stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('taxes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rates')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('termination_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone',15);
            $table->string('email');
            $table->longText('address');
            $table->longText('expertise');
            $table->integer('created_by')->default(0);
            $table->softDeletes();
        });
        Schema::create('training_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->softDeletes();
        });
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('tax_number')->default(0);
            $table->integer('employee_id')->default(0);
            $table->integer('client_type_id')->default(0);
            $table->integer('company_industry_id')->default(0)->comment('select option');
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('billing_address')->nullable();
            $table->integer('billing_country_id')->default(0);
            $table->integer('billing_province_id')->default(0);
            $table->integer('billing_regency_id')->default(0);
            $table->bigInteger('billing_district_id')->default(0);
            $table->bigInteger('billing_village_id')->default(0);
            $table->string('billing_postcode',5)->nullable();
            $table->string('shipping_address')->nullable();
            $table->integer('shipping_country_id')->default(0);
            $table->integer('shipping_province_id')->default(0);
            $table->integer('shipping_regency_id')->default(0);
            $table->bigInteger('shipping_district_id')->default(0);
            $table->bigInteger('shipping_village_id')->default(0);
            $table->string('shipping_postcode',5)->nullable();
            $table->string('password')->nullable();
            $table->enum('category',['Offline','Online'])->nullable();
            $table->enum('st',['Active','Non Active'])->nullable();
            $table->string('avatar')->nullable();
            $table->string('balance')->default(0);
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
        Schema::dropIfExists('banks');
    }
};

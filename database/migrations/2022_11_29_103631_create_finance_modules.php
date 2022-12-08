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
        Schema::create('bill_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_id')->default(0);
            $table->date('date');
            $table->string('amount');
            $table->integer('bank_account_id')->default(0);
            $table->integer('payment_method')->default(0);
            $table->string('reference');
            $table->string('add_receipt');
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('bill_items', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_id')->default(0);
            $table->string('name');
            $table->string('qty');
            $table->string('tax')->nullable();
            $table->string('discount')->default(0);
            $table->string('price')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_id')->default(0);
            $table->integer('vendor_id')->default(0);
            $table->string('code');
            $table->date('date');
            $table->date('due_at');
            $table->integer('st')->default(0);
            $table->integer('shipping_display')->default(0);
            $table->date('send_at');
            $table->integer('discount_apply')->default(0);
            $table->integer('category_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('period');
            $table->string('from');
            $table->string('to');
            $table->longText('income_data');
            $table->longText('expense_data');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('chart_of_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->default(0);
            $table->integer('chart_of_account_type_id')->default(0);
            $table->integer('chart_of_account_sub_type_id')->default(0);
            $table->integer('is_enabled')->default(0);
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('chart_of_account_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('chart_of_account_sub_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('chart_of_account_type_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('credit_notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('debit_notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('quotation_id')->default(0);
            $table->integer('invoice_id')->default(0);
            $table->integer('sales_id')->default(0);
            $table->string('name');
            $table->string('code');
            $table->date('date');
            $table->integer('opportunity_id')->default(0);
            $table->integer('st')->default(0);
            $table->integer('client_id')->default(0);
            $table->string('amount')->default(0);
            $table->integer('billing_client_contact_id')->default(0);
            $table->integer('shipping_client_contact_id')->default(0);
            $table->integer('shipping_provider_id')->default(0);
            $table->string('tax')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->default(0);
            $table->string('item');
            $table->string('qty');
            $table->string('price');
            $table->string('discount');
            $table->string('tax')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->default(0);
            $table->string('amount');
            $table->date('date');
            $table->string('price');
            $table->integer('payment_type_id')->default(0);
            $table->longText('notes')->nullable();
            $table->timestamps();
        });
        Schema::create('journal_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('journal_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('other_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('title');
            $table->string('amount');
            $table->enum('type',['fixed','percentage']);
            $table->timestamps();
        });
        Schema::create('proposal_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('retainer_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('retainer_payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('retainers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('revenues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('transfers', function (Blueprint $table) {
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

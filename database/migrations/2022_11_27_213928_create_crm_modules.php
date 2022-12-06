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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->string('name');
            $table->integer('st')->default(0)->comment('0 = Planned, 1 = Held, 2 = Not Held');
            $table->integer('direction')->default(0)->comment('0 = Outbound, 1 = Inbound');
            $table->date('start_at')->comment('tanggal tidak boleh kurang dari tanggal sekarang');
            $table->date('end_at')->comment('tanggal harus lebih atau sama dengan start at');
            $table->enum('parent',['client','lead','contact','opportunities','case'])->comment('select option');
            $table->integer('parent_id')->default(0);
            $table->longText('desc')->nullable();
            $table->timestamps();
        });
        Schema::create('call_attendees', function (Blueprint $table) {
            $table->id();
            $table->integer('call_id')->default(0);
            $table->integer('attendees_employee')->default(0)->comment('select employee');
            $table->integer('attendees_contact')->default(0)->comment('select contact');
            $table->integer('attendees_lead')->default(0)->comment('select lead');
            $table->timestamps();
        });
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('st')->default(0)->comment('0 = Planning, 1 = Active, 2 = Inactive, 3 = Complete');
            $table->integer('campaign_type_id')->comment('select campaign type');
            $table->string('budget')->comment('angka saja, tidak pakai koma atau titik');
            $table->date('start_at')->comment('tanggal tidak boleh kurang dari tanggal sekarang');
            $table->date('end_at')->comment('tanggal harus lebih atau sama dengan start at');
            $table->integer('target_list')->comment('select target list');
            $table->integer('ex_target_list')->comment('select target list');
            $table->longText('desc')->nullable();
            $table->timestamps();
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer('document_id')->default(0)->comment('select');
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_type_id')->default(0)->comment('select client type');
            $table->integer('company_industry_id')->default(0)->comment('select company industry');
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('billing_address')->nullable();
            $table->integer('billing_country_id')->default(0)->comment('select country');
            $table->integer('billing_province_id')->default(0)->comment('select province by country yg di pilih');
            $table->integer('billing_regency_id')->default(0)->comment('select regency by province yg di pilih');
            $table->bigInteger('billing_district_id')->default(0)->comment('select district by regency yg di pilih');
            $table->bigInteger('billing_village_id')->default(0)->comment('select village by district yg di pilih');
            $table->string('billing_postcode',5)->nullable()->comment('postcode bisa di isi manual atau didapat dari village yg di pilih');
            $table->longText('shipping_address')->nullable();
            $table->integer('shipping_country_id')->default(0)->comment('select country');
            $table->integer('shipping_province_id')->default(0)->comment('select province by country yg di pilih');
            $table->integer('shipping_regency_id')->default(0)->comment('select regency by province yg di pilih');
            $table->bigInteger('shipping_district_id')->default(0)->comment('select district by regency yg di pilih');
            $table->bigInteger('shipping_village_id')->default(0)->comment('select village by district yg di pilih');
            $table->string('shipping_postcode',5)->nullable()->comment('postcode bisa di isi manual atau didapat dari village yg di pilih');
            $table->string('password')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('url')->nullable();
            $table->string('paypal')->nullable();
            $table->string('google_id')->nullable();
            $table->enum('category',['Offline','Online'])->nullable();
            $table->enum('st',['Active','Non Active'])->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('client_contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_id')->default(0)->comment('didapat dari id client saat create');
            $table->string('name')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email')->nullable();
            $table->longText('address')->nullable();
            $table->integer('country_id')->default(0)->comment('select country');
            $table->integer('province_id')->default(0)->comment('select province by country yg di pilih');
            $table->integer('regency_id')->default(0)->comment('select regency by province yg di pilih');
            $table->bigInteger('district_id')->default(0)->comment('select district by regency yg di pilih');
            $table->bigInteger('village_id')->default(0)->comment('select village by district yg di pilih');
            $table->string('postcode',5)->nullable()->comment('postcode bisa di isi manual atau didapat dari village yg di pilih');
            $table->longText('description')->nullable();
            $table->enum('st',['Active','Non Active'])->nullable();
            $table->timestamps();
        });
        Schema::create('client_contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_id')->default(0)->comment('didapat dari id client saat create');
            $table->string('name');
            $table->string('subject');
            $table->string('value');
            $table->integer('contract_type_id')->default(0);
            $table->date('start_at')->comment('tanggal tidak boleh kurang dari tanggal sekarang');
            $table->date('end_at')->comment('tanggal harus lebih atau sama dengan start at');
            $table->longText('desc')->nullable();
            $table->longText('owner_signature')->nullable();
            $table->longText('client_signature')->nullable();
            $table->string('st');
            $table->timestamps();
        });
        Schema::create('client_contract_attachments', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_contract_id')->default(0)->comment('didapat dari id contract saat create');
            $table->string('files');
            $table->timestamps();
        });
        Schema::create('client_contract_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_contract_id')->default(0)->comment('didapat dari id contract saat create');
            $table->longText('comment');
            $table->timestamps();
        });
        Schema::create('client_contract_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_contract_id')->default(0)->comment('didapat dari id contract saat create');
            $table->longText('note');
            $table->timestamps();
        });
        Schema::create('client_meetings', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->string('name');
            $table->integer('st')->default(0)->comment('0 = Planned, 1 = Held, 2 = Not Held');
            $table->date('start_at')->comment('tanggal tidak boleh kurang dari tanggal sekarang');
            $table->date('end_at')->comment('tanggal harus lebih atau sama dengan start at');
            $table->enum('parent',['client','lead','contact','opportunities','case'])->comment('select option');
            $table->integer('parent_id')->default(0);
            $table->longText('desc')->nullable();
            $table->timestamps();
        });
        Schema::create('client_meeting_attendees', function (Blueprint $table) {
            $table->id();
            $table->integer('meeting_id')->default(0);
            $table->integer('attendees_employee')->default(0)->comment('select employee');
            $table->integer('attendees_contact')->default(0)->comment('select contact');
            $table->integer('attendees_lead')->default(0)->comment('select lead');
            $table->timestamps();
        });
        Schema::create('client_ticket_replies', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_id')->default(0);
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->longText('desc')->nullable();
            $table->integer('is_read')->default(0);
            $table->integer('created_by')->default(0);
            $table->softDeletes();
        });
        Schema::create('client_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->default(0);
            $table->string('code');
            $table->longText('title');
            $table->longText('desc');
            $table->integer('priority')->default(0);
            $table->string('st');
            $table->integer('created_by')->default(0);
            $table->timestamp('end_at');
            $table->timestamps();
        });
        Schema::create('common_cases', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->string('name');
            $table->string('number');
            $table->integer('st')->default(0);
            $table->integer('client_id')->default(0)->comment('select option client');
            $table->integer('priority')->default(0);
            $table->integer('client_contact_id')->default(0)->comment('select contact berdasarkan client yg di pilih');
            $table->string('attachment')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('client_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_id')->default(0)->comment('didapat dari id client saat create');
            $table->string('name');
            $table->integer('document_folder_id')->default(0)->comment('select option dari document folder');
            $table->integer('document_type_id')->default(0)->comment('select option dari document type');
            $table->integer('opportunity_id')->default(0)->comment('select option dari opportunity');
            $table->date('publish_date')->comment('tanggal tidak boleh kurang dari tanggal sekarang');
            $table->date('expiration_date')->comment('tanggal harus lebih atau sama dengan publish date');
            $table->integer('st')->default(0)->comment('0 = Active, 1 = Draft, 32 = Expired, 3 = Canceled');
            $table->longText('desc')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_id')->default(0)->comment('didapat dari id client saat create');
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->integer('country_id')->default(0)->comment('select country');
            $table->integer('province_id')->default(0)->comment('select province by country yg di pilih');
            $table->integer('regency_id')->default(0)->comment('select regency by province yg di pilih');
            $table->bigInteger('district_id')->default(0)->comment('select district by regency yg di pilih');
            $table->bigInteger('village_id')->default(0)->comment('select village by district yg di pilih');
            $table->string('postcode',5)->nullable()->comment('postcode bisa di isi manual atau didapat dari village yg di pilih');
            $table->longText('description')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->integer('client_id')->default(0)->comment('select option dari client');
            $table->string('name');
            $table->integer('client_contact_id')->default(0)->comment('select contact berdasarkan client');
            $table->integer('opportunities_stage_id')->default(0)->comment('select opportunities stage');
            $table->string('amount')->default(0);
            $table->string('probability')->default(0);
            $table->date('close_date');
            $table->integer('lead_source_id')->default(0)->comment('select lead source');
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->integer('quotation_id')->default(0)->comment('didapat dari id quotation jika duplicate');
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->string('name');
            $table->string('code');
            $table->date('date');
            $table->integer('opportunity_id')->default(0)->comment('select opportunity');
            $table->integer('st')->default(0)->comment('0 = Open, 1 = Closed');
            $table->integer('client_id')->default(0)->comment('didapat dari id client saat pilih opportunity');
            $table->string('amount')->default(0);
            $table->integer('billing_client_contact_id')->default(0)->comment('select client contact berdasarkan client');
            $table->integer('shipping_client_contact_id')->default(0)->comment('select client contact berdasarkan client');
            $table->integer('shipping_provider_id')->default(0)->comment('select shipping provider');
            $table->string('tax')->nullable()->comment('select option multiple, pilih dari taxes, yg dimasukkan ke table id nya');
            $table->longText('desc')->nullable();
            $table->integer('sales_order_id')->default(0)->comment('didapat dari id sales order jika di convert');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('quotation_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quotation_id')->default(0);
            $table->string('item');
            $table->string('qty')->default(0);
            $table->string('price')->default(0);
            $table->string('discount')->default(0);
            $table->string('tax')->nullable()->comment('select option multiple, pilih dari taxes, yg dimasukkan ke table id nya');
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('sales_id')->default(0)->comment('didapat dari id sales jika duplicate');
            $table->integer('quotation_id')->default(0)->comment('didapat dari id quotation jika di convert');
            $table->integer('employee_id')->default(0)->comment('assigned employee');
            $table->string('name');
            $table->string('code');
            $table->date('date');
            $table->integer('opportunity_id')->default(0)->comment('select opportunity');
            $table->integer('st')->default(0)->comment('0 = Open, 1 = Canceled');
            $table->integer('client_id')->default(0)->comment('didapat dari id client saat pilih opportunity');
            $table->string('amount')->default(0);
            $table->integer('billing_client_contact_id')->default(0)->comment('select client contact berdasarkan client');
            $table->integer('shipping_client_contact_id')->default(0)->comment('select client contact berdasarkan client');
            $table->integer('shipping_provider_id')->default(0)->comment('select shipping provider');
            $table->string('tax')->nullable()->comment('select option multiple, pilih dari taxes, yg dimasukkan ke table id nya');
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('sale_items', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->default(0);
            $table->integer('sales_id')->default(0);
            $table->string('item');
            $table->string('qty')->default(0);
            $table->string('price')->default(0);
            $table->string('discount')->default(0);
            $table->string('tax')->nullable()->comment('select option multiple, pilih dari taxes, yg dimasukkan ke table id nya');
            $table->longText('desc')->nullable();
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
        Schema::dropIfExists('clients');
    }
};

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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('company_branch_id')->default(0);
            $table->string('department_id')->default(0);
            $table->string('employee_id')->default(0);
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('appraisals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('document_uploads', function (Blueprint $table) {
            $table->id();
            $table->integer('position_id')->default(0);
            $table->string('name');
            $table->string('attachment');
            $table->longText('desc');
            $table->enum('is_private',['n','y'])->default('n');
            $table->timestamps();
        });
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
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
        Schema::create('employee_allowances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_attendances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_awards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('name');
            $table->integer('bank_id')->default(0);
            $table->string('account_number')->unique()->default(0);
            $table->string('branch_name')->default('-');
            $table->boolean('is_primary');
            $table->softDeletes();
        });
        Schema::create('employee_chat_favorites', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('favorite_id');
            $table->timestamps();
        });
        Schema::create('employee_chat_messages', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->bigInteger('from_id');
            $table->bigInteger('to_id');
            $table->longText('body');
            $table->longText('attachment');
            $table->tinyInteger('seen');
            $table->timestamps();
        });
        Schema::create('employee_commissions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_complaints', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('name');
            $table->string('subject');
            $table->string('value');
            $table->integer('contract_type_id')->default(0);
            $table->date('start_at');
            $table->date('end_at');
            $table->longText('desc');
            $table->longText('owner_signature');
            $table->longText('client_signature');
            $table->string('st');
            $table->timestamps();
        });
        Schema::create('employee_contract_attachments', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('contract_id')->default(0);
            $table->string('files');
            $table->timestamps();
        });
        Schema::create('employee_contract_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('contract_id')->default(0);
            $table->longText('comment');
            $table->timestamps();
        });
        Schema::create('employee_contract_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('contract_id')->default(0);
            $table->longText('note');
            $table->timestamps();
        });
        Schema::create('employee_holidays', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_loans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_meetings', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->default(0);
            $table->longText('position_id')->nullable();
            $table->longText('employee_id')->nullable();
            $table->string('title');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
        });
        Schema::create('employee_memos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id')->default(0);
            $table->longText('title');
            $table->longText('body');
            $table->timestamps();
        });
        Schema::create('employee_online_meetings', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->default(0);
            $table->longText('position_id')->nullable();
            $table->longText('employee_id')->nullable();
            $table->string('title');
            $table->date('date');
            $table->string('url');
            $table->string('st');
            $table->time('time');
            $table->longText('note');
            $table->timestamps();
        });
        Schema::create('employee_online_meeting_attendees', function (Blueprint $table) {
            $table->id();
            $table->integer('online_meeting_id')->default(0);
            $table->integer('attendees_employee')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_overtimes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('employee_promotions', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('position_id')->default(0);
            $table->string('promotion_title');
            $table->date('promotion_date');
            $table->longText('desc')->nullable();
            $table->softDeletes();
        });
        Schema::create('employee_resignations', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_saturation_deductions', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_terminations', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_ticket_replies', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_tickets', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_trainings', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_transfers', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_travels', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('employee_warnings', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
        });
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->default(0);
            $table->integer('employee_id')->default(0);
            $table->longText('title');
            $table->longText('description')->nullable();
            $table->string('color')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->enum('is_private',['n','y'])->default('n');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('experience_certificates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('generate_offer_letters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('goal_trackings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('indicators', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('interview_schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('job_application_notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('job_on_boards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('joining_letters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('leave_type_id')->default(0);
            $table->date('applied_on');
            $table->date('start_at');
            $table->date('end_at');
            $table->string('total_leave_days');
            $table->longText('leave_reason')->nullable();
            $table->string('remark');
            $table->longText('denied_reason')->nullable();
            $table->enum('st',['Pending','Approved','Denied'])->nullable();
            $table->integer('verified_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('noc_certificates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('payslips', function (Blueprint $table) {
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
        Schema::dropIfExists('day_offs');
    }
};

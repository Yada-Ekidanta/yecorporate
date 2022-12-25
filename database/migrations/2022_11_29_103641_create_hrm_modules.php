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
            $table->integer('company_branch_id')->default(0);
            $table->integer('employee_id')->default(0);
            $table->smallInteger('rating')->default(0);
            $table->date('appraisal_date')->nullable();
            $table->integer('customer_experience')->default(0);
            $table->integer('marketing')->default(0);
            $table->integer('administration')->default(0);
            $table->integer('professionalism')->default(0);
            $table->integer('integrity')->default(0);
            $table->integer('attendance')->default(0);
            $table->longText('remark')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->integer('company_bank_account_id')->default(0);
            $table->string('amount')->default(0);
            $table->date('date')->nullable();
            $table->integer('income_type_id')->default(0);
            $table->integer('payer_id')->default(0);
            $table->integer('payment_type_id')->default(0);
            $table->string('referal_id')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
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
            $table->longText('cover_letter')->nullable();
            $table->longText('skill')->nullable();
            $table->string('resume')->nullable();
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
            $table->integer('employee_id')->default(0);
            $table->integer('allowance_option_id')->default(0);
            $table->string('title')->nullable();
            $table->string('amount')->nullable();
            $table->string('type')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_attendances', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->date('date')->nullable();
            $table->string('st')->nullable();
            $table->time('clock_in')->nullable();
            $table->time('clock_out')->nullable();
            $table->time('late')->nullable();
            $table->time('early_leaving')->nullable();
            $table->time('overtime')->nullable();
            $table->time('total_rest')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_awards', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('award_type_id')->default(0);
            $table->date('date')->nullable();
            $table->longText('gift')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
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
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_chat_favorites', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('favorite_id')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_chat_messages', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->bigInteger('from_id')->default(0);
            $table->bigInteger('to_id')->default(0);
            $table->longText('body');
            $table->longText('attachment');
            $table->tinyInteger('seen')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_commissions', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('title')->nullable();
            $table->string('amount')->nullable();
            $table->string('type')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_complaints', function (Blueprint $table) {
            $table->id();
            $table->integer('complaint_from')->default(0);
            $table->integer('complaint_again')->default(0);
            $table->string('title')->nullable();
            $table->date('date')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->integer('employee_id')->default(0);
            $table->string('value');
            $table->integer('employee_contract_type_id')->default(0);
            $table->date('start_at');
            $table->date('end_at');
            $table->longText('notes')->nullable();
            $table->longText('contract_description')->nullable();
            $table->longText('employee_signature')->nullable();
            $table->longText('company_signature')->nullable();
            $table->string('st')->nullable();
            $table->integer('created_by')->default(0);
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
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('occasion')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_loans', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('loan_option_id')->default(0);
            $table->string('title')->nullable();
            $table->string('amount')->nullable();
            $table->string('type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('reason')->nullable();
            $table->integer('created_by')->default(0);
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
            $table->integer('employee_id')->default(0);
            $table->string('title')->nullable();
            $table->integer('number_of_days')->default(0);
            $table->integer('hours')->default(0);
            $table->integer('rate')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('employee_promotions', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('position_id')->default(0);
            $table->string('promotion_title');
            $table->date('promotion_date');
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_resignations', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->date('notice_date')->nullable();
            $table->date('resignation_date')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_saturation_deductions', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('deduction_option_id')->default(0);
            $table->string('title')->nullable();
            $table->string('amount')->default(0);
            $table->string('type')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_terminations', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->date('notice_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->integer('termination_type_id')->default(0);
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_ticket_replies', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_id')->default(0);
            $table->integer('employee_id')->default(0);
            $table->longText('desc')->nullable();
            $table->integer('is_read')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->integer('employee_id')->default(0);
            $table->string('title')->nullable();
            $table->string('priority')->nullable();
            $table->date('end_date')->nullable();
            $table->string('st')->nullable();
            $table->integer('ticket_created')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_trainings', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
            $table->integer('trainer_option_id')->default(0);
            $table->integer('training_type_id')->default(0);
            $table->integer('trainer_id')->default(0);
            $table->string('training_cost')->default(0);
            $table->integer('employee_id')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('performance_type_id')->default(0);
            $table->integer('st')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
            $table->integer('employee_id')->default(0);
            $table->integer('department_id')->default(0);
            $table->integer('position_id')->default(0);
            $table->date('transfer_date')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_travels', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('purpose_of_visit')->nullable();
            $table->longText('place_of_visit')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employee_warnings', function (Blueprint $table) {
            $table->id();
            $table->integer('warning_to')->default(0);
            $table->integer('warning_by')->default(0);
            $table->string('subject')->nullable();
            $table->date('warning_date')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
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
            $table->string('lang')->nullable();
            $table->longText('content')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('generate_offer_letters', function (Blueprint $table) {
            $table->id();
            $table->string('lang')->nullable();
            $table->longText('content')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('goal_trackings', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
            $table->integer('goal_type_id')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('subject')->nullable();
            $table->string('rating')->default(0);
            $table->string('target_achievement')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('st')->default(0);
            $table->integer('progress')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('indicators', function (Blueprint $table) {
            $table->id();
            $table->integer('company_branch_id')->default(0);
            $table->integer('department_id')->default(0);
            $table->integer('position_id')->default(0);
            $table->string('rating')->default(0);
            $table->integer('customer_experience')->default(0);
            $table->integer('marketing')->default(0);
            $table->integer('administration')->default(0);
            $table->integer('professionalism')->default(0);
            $table->integer('integrity')->default(0);
            $table->integer('attendance')->default(0);
            $table->longText('remark')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('interview_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id')->default(0);
            $table->integer('employee_id')->default(0);
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->longText('comment')->nullable();
            $table->longText('employee_response')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('job_application_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('job_application_id')->default(0);
            $table->integer('note_created')->default(0);
            $table->longText('notes')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->default(0);
            $table->integer('employee_id')->default(0);
            $table->integer('job_stage_id')->default(0);
            $table->integer('order')->default(0);
            $table->string('ratings')->default(0);
            $table->longText('custom_question')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('job_on_boards', function (Blueprint $table) {
            $table->id();
            $table->integer('job_application_id')->default(0);
            $table->date('joining_date')->nullable();
            $table->string('st')->nullable();
            $table->string('job_type')->nullable();
            $table->string('days_of_week')->default(0);
            $table->string('salary')->default(0);
            $table->string('salary_type')->default(0);
            $table->string('salary_duration')->default(0);
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->integer('company_branch_id')->default(0);
            $table->integer('department_id')->default(0);
            $table->integer('position_id')->default(0);
            $table->integer('job_category_id')->default(0);
            $table->longText('title')->nullable();
            $table->longText('slug')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('requirement')->nullable();
            $table->longText('skill')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('st')->nullable();
            $table->string('applicant')->nullable();
            $table->string('visibility')->nullable();
            $table->longText('custom_question')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('joining_letters', function (Blueprint $table) {
            $table->id();
            $table->string('lang')->nullable();
            $table->longText('content')->nullable();
            $table->integer('created_by')->default(0);
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
            $table->string('lang')->nullable();
            $table->longText('content')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->integer('net_payable')->default(0);
            $table->string('salary_month')->nullable();
            $table->integer('st')->default(0);
            $table->string('basic_salary')->default(0);
            $table->longText('allowance')->nullable();
            $table->longText('commission')->nullable();
            $table->longText('loan')->nullable();
            $table->longText('saturation_deduction')->nullable();
            $table->longText('other_payment')->nullable();
            $table->longText('overtime')->nullable();
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
        Schema::dropIfExists('day_offs');
    }
};

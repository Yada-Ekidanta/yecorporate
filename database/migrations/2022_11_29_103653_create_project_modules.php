<?php

use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function GuzzleHttp\Promise\promise_for;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_projects', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('user_id');
            $table->float('hr_rate',20,0);
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('title');
            $table->string('status');
            $table->longText('desc');
            $table->timestamps();
        });
        Schema::create('projects_task_timers', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->timestamps();
        });
        Schema::create('projects_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('desc');
            $table->integer('estimated_hrs');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('priority');
            $table->string('priority_color');
            $table->longText('assign_to');
            $table->integer('project_id');
            $table->integer('milestone_id');
            $table->integer('stage_id');
            $table->integer('order');
            $table->integer('time_tracking');
            $table->integer('created_by');
            $table->integer('is_favourite');
            $table->integer('is_completed');
            $table->integer('market_at');
            $table->integer('progress');
            $table->timestamps();
        });
        Schema::create('projects_users', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('user_id');
            $table->string('permission');
            $table->longtext('user_permission');
            $table->integer('invited_by');
            $table->timestamps();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->string('name');
            $table->string('color');
            $table->integer('billable_status');
            $table->float('hr_rate',20,0);
            $table->string('estimate');
            $table->integer('time_hr');
            $table->string('visibility_status');
            $table->string('image');
            $table->string('status');
            $table->float('budget',20,0);
            $table->string('budget_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('currency');
            $table->string('currency_code');
            $table->string('currency_position');
            $table->integer('created_by');
            $table->integer('is_active');
            $table->longText('description');
            $table->string('project_progress');
            $table->string('progress');
            $table->string('task_progress');
            $table->longText('tags');
            $table->longText('note');
            $table->integer('is_favourite');
            $table->integer('estimated_hrs');
            $table->timestamps();
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('task_checklists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('task_id');
            $table->string('user_type');
            $table->integer('created_by');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::create('task_comments', function (Blueprint $table) {
            $table->id();
            $table->longText('comment');
            $table->string('user_type');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('task_files', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('name');
            $table->string('extension');
            $table->string('file_size');
            $table->integer('task_id');
            $table->string('user_type');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('name');
            $table->float('estimate_hr');
            $table->string('assign_to');
            $table->integer('st')->default(0);
            $table->integer('task_stage_id')->default(0);
            $table->integer('priority')->default(0);
            $table->date('start_at');
            $table->date('end_at');
            $table->string('parent');
            $table->integer('parent_id')->default(0);
            $table->longText('desc');
            $table->string('attachment');
            $table->integer('created_by')->default(0);
            $table->timestamps();
        });
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('task_id');
            $table->date('date');
            $table->time('time');
            $table->longText('desc');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('time_trackers', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('task_id');
            $table->integer('tag_id');
            $table->string('name');
            $table->integer('is_billable');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->string('total_time');
            $table->string('is_active');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('track_photos', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('user_id');
            $table->string('img_path');
            $table->timestamp('time');
            $table->string('st');
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

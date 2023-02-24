<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('image');
            $table->string('estimated_hrs');
            $table->string('budget');
            $table->string('currency', 50)->default('$');
            $table->string('status', 50);
            $table->longText('desc');
            $table->timestamps();
        });
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->default(0);
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('status');
            $table->longText('desc');
            $table->timestamps();
        });
        Schema::create('projects_task_timers', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
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
            $table->unsignedBigInteger('team_id')->default(0);
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->string('name');
            $table->unsignedBigInteger('milestone_id')->default(0);
            $table->foreign('milestone_id')->references('id')->on('milestones')->onDelete('cascade');
            $table->string('priority');
            $table->date('start_at');
            $table->date('end_at');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->longText('desc');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('todo_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->string('name');
            $table->date('due_date');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::create('time_trackers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->string('name');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->date('date');
            $table->string('total_time')->default(0);
            $table->string('is_active');
            $table->integer('created_by');
            $table->timestamps();
        });
        Schema::create('zoom_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->timestamp('start_date');
            $table->integer('duration')->default(0);
            $table->string('join_url')->nullable();
            $table->timestamps();
        });
        Schema::create('calendar_pm', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('start');
            $table->date('end');
            $table->boolean('all_day');
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

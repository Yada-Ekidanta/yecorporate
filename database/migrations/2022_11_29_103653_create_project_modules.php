<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->timestamps();
        });
        Schema::create('projects_task_timers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('projects_tasks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('projects_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('image');
            $table->integer('estimated_hrs')->default(0);
            $table->integer('budget')->default(0);
            $table->string('currency', 50)->default('$');
            $table->longText('desc');
            $table->timestamps();
        });
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('status');
            $table->longText('desc');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('task_checklists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('task_comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('task_files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->default(0);
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('created_by');
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
            $table->string('created_by');
            $table->timestamps();
        });
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
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
            $table->string('total_time')->default(0);
            $table->string('is_active');
            $table->string('created_by');
            $table->timestamps();
        });
        Schema::create('track_photos', function (Blueprint $table) {
            $table->id();
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
        Schema::create('invoices_pm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('client');
            $table->date('due_date');
            $table->timestamps();
        });
        Schema::create('zoom_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->date('start_date');
            $table->integer('duration')->default(0);
            $table->string('join_url')->nullable();
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

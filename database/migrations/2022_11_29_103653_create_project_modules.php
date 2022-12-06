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
        Schema::create('assign_projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('milestones', function (Blueprint $table) {
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(0);
            $table->string('name');
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
            $table->timestamps();
        });
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('time_trackers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('track_photos', function (Blueprint $table) {
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

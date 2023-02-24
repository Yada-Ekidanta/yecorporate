<?php

namespace App\Models\PM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function team() {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function milestone() {
        return $this->belongsTo(Milestone::class, 'milestone_id');
    }

    public function todoList() {
        return $this->hasMany(TodoList::class, 'task_id');
    }

    public function tracker() {
        return $this->hasMany(Tracker::class, 'task_id');
    }
}

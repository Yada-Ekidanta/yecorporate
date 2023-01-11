<?php

namespace App\Models\PM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;

    protected $table = 'time_trackers';

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function task() {
        return $this->belongsTo(Task::class, 'task_id');
    }
}

<?php

namespace App\Models\PM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function task() {
        return $this->hasOne(Task::class, 'milestone_id');
    }
}

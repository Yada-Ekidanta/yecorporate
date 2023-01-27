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

    public function tracker() {
        return $this->hasMany(Tracker::class, 'task_id');
    }
}

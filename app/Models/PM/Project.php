<?php

namespace App\Models\PM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function zoom() {
        return $this->hasMany(Zoom::class, 'project_id');
    }

    public function invoice() {
        return $this->hasMany(InvoicePM::class, 'project_id');
    }

    public function task() {
        return $this->hasMany(Task::class, 'project_id');
    }

    public function tracker() {
        return $this->hasMany(Tracker::class, 'project_id');
    }
}

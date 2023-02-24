<?php

namespace App\Models\PM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    use HasFactory;
    protected $table = 'zoom_meetings';

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
}

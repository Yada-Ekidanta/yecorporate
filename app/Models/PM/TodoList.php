<?php

namespace App\Models\PM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;
    protected $table = 'todo_list';

    public function task() {
        return $this->belongsTo(Task::class, 'task_id');
    }
}

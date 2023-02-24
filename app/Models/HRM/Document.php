<?php

namespace App\Models\HRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    public $table = 'document_uploads';

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}

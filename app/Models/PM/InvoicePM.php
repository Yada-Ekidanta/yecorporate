<?php

namespace App\Models\PM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePM extends Model
{
    use HasFactory;
    protected $table = 'invoices_pm';

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
}

<?php

namespace App\Models\Corporate;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LegalDocType extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = false;
    public function parent()
    {
        return $this->belongsTo(LegalDocType::class,'doc_type_id','id');
    }
    public function children()
    {
        return $this->hasMany(LegalDocType::class,'doc_type_id','id');
    }
    public function doc ()
    {
        return $this->hasMany(LegalDoc::class,'doc_type_id','id');
    }
}

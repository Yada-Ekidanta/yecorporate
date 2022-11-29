<?php

namespace App\Models\Support;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function faq ()
    {
        return $this->hasMany(Faq::class);
    }
}

<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
    use HasFactory;
    public function detail ()
    {
        return $this->hasMany(ChangelogDetail::class);
    }
}

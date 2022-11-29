<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactGroup extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = false;
    public function leads ()
    {
        return $this->hasMany(Lead::class);
    }
    public function clients ()
    {
        return $this->hasMany(Client::class);
    }
}

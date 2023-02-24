<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    public function getImageAttribute()
    {
        if($this->thumbnail){
            return asset('storage/' . $this->thumbnail);
        }else{
            return asset('storage/' . $this->thumbnail);
        }
    }
}

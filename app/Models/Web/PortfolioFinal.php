<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioFinal extends Model
{
    use HasFactory;
    public function getImageAttribute()
    {
        if($this->file){
            return asset('storage/' . $this->file);
        }else{
            return asset('storage/' . $this->file);
        }
    }
    public function portfolio ()
    {
        return $this->belongsTo(Portfolio::class,'portfolio_id','id');
    }
}

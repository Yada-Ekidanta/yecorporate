<?php

namespace App\Models\CRM;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    public function getImageAttribute()
    {
        if($this->thumbnail){
            return "<div class='symbol-label'><img src='".asset('storage/' . $this->thumbnail)."' alt='".$this->title."' class='w-100' /></div>";
        }else{
            $title = Str::substr($this->title, 0, 1);
            return "<div class='symbol-label fs-3 bg-light-danger text-danger'>".$title."</div>";
        }
    }
}

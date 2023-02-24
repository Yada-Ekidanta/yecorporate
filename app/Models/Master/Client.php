<?php

namespace App\Models\Master;

use App\Models\Finance\Presale\Proposal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'client_id');
    }
}

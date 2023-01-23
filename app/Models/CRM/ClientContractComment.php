<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContractComment extends Model
{
    use HasFactory;

    protected $table = 'client_contract_comments';

    public function client_contarct()
    {
        return $this->belongsTo(ClientContract::class, 'client_contract_id');
    }
}

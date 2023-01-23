<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContractAttachment extends Model
{
    use HasFactory;

    public function client_contarct()
    {
        return $this->belongsTo(ClientContract::class, 'client_contract_id');
    }
}

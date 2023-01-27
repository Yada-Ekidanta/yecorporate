<?php

namespace App\Models\CRM;

use App\Models\HRM\Employee;
use App\Models\Master\ClientContractType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContract extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function client_contract_type()
    {
        return $this->belongsTo(ClientContractType::class, 'client_contract_type_id');
    }

    public function client_contract_attachment()
    {
        return $this->hasMany(ClientContractAttachment::class, 'client_contract_id');
    }

    public function client_contract_comment()
    {
        return $this->hasMany(ClientContractComment::class, 'client_contract_id');
    }

    public function client_contract_note()
    {
        return $this->hasMany(ClientContractNote::class, 'client_contract_id');
    }
}

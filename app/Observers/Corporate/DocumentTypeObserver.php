<?php

namespace App\Observers\Corporate;

use App\Models\HRM\Employee;
use Illuminate\Support\Facades\Auth;
use App\Models\Corporate\LegalDocType;
use App\Notifications\Corporate\DocumentType\CreateDocumentTypeNotification;
use App\Notifications\Corporate\DocumentType\UpdateDocumentTypeNotification;

class DocumentTypeObserver
{
    public function created(LegalDocType $documentType)
    {
        $recepient = Employee::whereIn('position_id',[4,6])->where('id','!=',Auth::guard('employees')->user()->id)->get();
        foreach($recepient as $r){
            $r->notify(new CreateDocumentTypeNotification($documentType,$r));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function updated(LegalDocType $documentType)
    {
        $recepient = Employee::whereIn('position_id',[4,6])->where('id','!=',Auth::guard('employees')->user()->id)->get();
        foreach($recepient as $r){
            $r->notify(new UpdateDocumentTypeNotification($documentType,$r));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function deleted(LegalDocType $legalDocType)
    {
        //
    }
    public function restored(LegalDocType $legalDocType)
    {
        //
    }
    public function forceDeleted(LegalDocType $legalDocType)
    {
        //
    }
}

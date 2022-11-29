<?php

namespace App\Observers\Corporate;

use App\Models\HRM\Employee;
use App\Models\Corporate\LegalDoc;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Corporate\Document\CreateDocumentNotification;
use App\Notifications\Corporate\Document\UpdateDocumentNotification;

class DocumentObserver
{
    public function created(LegalDoc $document)
    {
        $employee = Auth::guard('employees')->user();
        $recepient = Employee::whereIn('position_id',[4,6])->where('id','!=',Auth::guard('employees')->user()->id)->get();
        foreach($recepient as $r){
            $r->notify(new CreateDocumentNotification($document,$employee));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function updated(LegalDoc $document)
    {
        $employee = Auth::guard('employees')->user();
        $recepient = Employee::whereIn('position_id',[4,6])->where('id','!=',Auth::guard('employees')->user()->id)->get();
        foreach($recepient as $r){
            $r->notify(new UpdateDocumentNotification($document,$employee));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function deleted(LegalDoc $legalDoc)
    {
        //
    }
    public function restored(LegalDoc $legalDoc)
    {
        //
    }
    public function forceDeleted(LegalDoc $legalDoc)
    {
        //
    }
}

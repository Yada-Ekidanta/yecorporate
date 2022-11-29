<?php

namespace App\Observers\Master;

use App\Models\HRM\Employee;
use App\Models\Master\Event;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Master\Event\CreateEventNotification;
use App\Notifications\Master\Event\DeleteEventNotification;
use App\Notifications\Master\Event\UpdateEventNotification;

class EventObserver
{
    public function created(Event $event)
    {
        $employee = Auth::guard('employees')->user();
        $recepient = Employee::whereIn('position_id',[4,6])->where('id','!=',Auth::guard('employees')->user()->id)->get();
        foreach($recepient as $r){
            $r->notify(new CreateEventNotification($event,$employee));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function updated(Event $event)
    {
        $employee = Auth::guard('employees')->user();
        $recepient = Employee::whereIn('position_id',[4,6])->where('id','!=',Auth::guard('employees')->user()->id)->get();
        foreach($recepient as $r){
            $r->notify(new UpdateEventNotification($event,$employee));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function deleted(Event $event)
    {
        $events = $event;
        $employee = Auth::guard('employees')->user();
        $recepient = Employee::whereIn('position_id',[4,6])->where('id','!=',Auth::guard('employees')->user()->id)->get();
        foreach($recepient as $r){
            $r->notify(new DeleteEventNotification($events,$employee));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function restored(Event $event)
    {
        //
    }
    public function forceDeleted(Event $event)
    {
        //
    }
}

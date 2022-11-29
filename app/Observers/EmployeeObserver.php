<?php

namespace App\Observers;

use App\Models\HRM\Employee;
use App\Notifications\RegisteredEmployeeNotification;

class EmployeeObserver
{
    public function created(Employee $employee)
    {
        $recepient = Employee::whereIn('position_id',[4,6,13,17])->get();
        foreach($recepient as $r){
            $r->notify(new RegisteredEmployeeNotification($employee));
            // Notification::send($r, new RegisteredEmployeeNotification($employee));
        }
    }
    public function updated(Employee $employee)
    {
        //
    }
    public function deleted(Employee $employee)
    {
        //
    }
    public function restored(Employee $employee)
    {
        //
    }
    public function forceDeleted(Employee $employee)
    {
        //
    }
}

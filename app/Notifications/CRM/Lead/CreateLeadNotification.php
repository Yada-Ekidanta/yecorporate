<?php

namespace App\Notifications\CRM\Lead;

use App\Models\CRM\Lead;
use App\Models\HRM\Employee;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CreateLeadNotification extends Notification
{
    use Queueable;
    protected $lead,$employee;
    public function __construct(Lead $lead,Employee $employee)
    {
        $this->lead = $lead;
        $this->employee = $employee;
    }
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }
    public function toMail($notifiable)
    {
        // 
    }
    public function toArray($notifiable)
    {
        return [
            'tipe' => 'Leads',
            'nama' => $this->employee->name,
            'pesan' => "Hi ".$this->employee->name.", ".$this->lead->name." just created by ".$this->employee->name." at ".date('d F Y, g:i a')."."
        ];
    }
}

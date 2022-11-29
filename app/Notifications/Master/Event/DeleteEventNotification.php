<?php

namespace App\Notifications\Master\Event;

use App\Models\HRM\Employee;
use App\Models\Master\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DeleteEventNotification extends Notification
{
    use Queueable;
    protected $event,$employee;
    public function __construct(Event $event,Employee $employee)
    {
        $this->event = $event;
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
            'tipe' => 'Event',
            'nama' => $this->event->name,
            'pesan' => "Hi ".$notifiable->name.", ".$this->event->name." just deleted by ".$this->employee->name." at ".date('d F Y, g:i a')."."
        ];
    }
}

<?php

namespace App\Notifications\CRM\Lead;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DeleteLeadNotification extends Notification
{
    use Queueable;
    public function __construct()
    {
        //
    }
    public function via($notifiable)
    {
        return ['mail'];
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
            'pesan' => "Hi ".$this->employee->name.", ".$this->leads->name." just deleted by ".$this->employee->name." at ".date('d F Y, g:i a')."."
        ];
    }
}
